from __future__ import print_function
import httplib2
import os

from apiclient import discovery
from oauth2client import client
from oauth2client import tools
from oauth2client.file import Storage

import datetime

try:
    import argparse
    flags = argparse.ArgumentParser(parents=[tools.argparser]).parse_args()
except ImportError:
    flags = None

# If modifying these scopes, delete your previously saved credentials
# at ~/.credentials/calendar-python-quickstart.json
SCOPES = 'https://www.googleapis.com/auth/calendar.readonly'
CLIENT_SECRET_FILE = 'client_secret.json'
APPLICATION_NAME = 'Google Calendar API Python Quickstart'

def get_credentials():
    """Gets valid user credentials from storage.

    If nothing has been stored, or if the stored credentials are invalid,
    the OAuth2 flow is completed to obtain the new credentials.

    Returns:
        Credentials, the obtained credential.
    """
    home_dir = os.path.expanduser('~')
    credential_dir = os.path.join(home_dir, '.credentials')
    if not os.path.exists(credential_dir):
        os.makedirs(credential_dir)
    credential_path = os.path.join(credential_dir,
                                   'calendar-python-quickstart.json')

    store = Storage(credential_path)
    credentials = store.get()
    if not credentials or credentials.invalid:
        flow = client.flow_from_clientsecrets(CLIENT_SECRET_FILE, SCOPES)
        flow.user_agent = APPLICATION_NAME
        if flags:
            credentials = tools.run_flow(flow, store, flags)
        else: # Needed only for compatibility with Python 2.6
            credentials = tools.run(flow, store)
        print('Storing credentials to ' + credential_path)
    return credentials

def main():
    """Shows basic usage of the Google Calendar API.

    Creates a Google Calendar API service object and outputs a list of the next
    50 events on the user's calendar.
    """
    credentials = get_credentials()
    http = credentials.authorize(httplib2.Http())
    service = discovery.build('calendar', 'v3', http=http)

    now = datetime.datetime.utcnow().isoformat() + 'Z' # 'Z' indicates UTC time
    
    eventsResult = service.events().list(
        calendarId='primary', timeMin=now, maxResults=50, singleEvents=True,
        orderBy='startTime').execute()
    events = eventsResult.get('items', [])


    for event in events:
        start = event['start'].get('dateTime', event['start'].get('date'))
        end = event['end'].get('dateTime', event['end'].get('date'))
        dateStr,timeStr = start.split("T")
        endDateStr,endTimeStr = end.split("T")
        yearStr,monthStr,dayStr = dateStr.split("-")
        startStr,startEndStr = timeStr.split("-")
        endStr,endEndStr = endTimeStr .split("-")
        hourStr,minStr,secStr = startStr.split(":")
        endHourStr,endMinStr,endSecStr = endStr.split(":")
        startMid = ' AM'
        if ( int(hourStr) > 12 ) :
            startHour = int(hourStr) - 12
            hourStr= str(startHour )
            startMid = ' PM'
        endMid = ' AM'
        if ( int(endHourStr) > 12 ) :
            endHour = int(endHourStr) - 12
            endHourStr = str(endHour )
            endMid = ' PM'
        print('<tr>')
        out = '<td class="text-left">' + event['summary'] + '</td><td>' + monthStr + '/' + dayStr + '/' + yearStr + '</td>'
#            out = '<td class="text-left">' + event['summary'] + '</td><td>' +
#            monthStr + '/' + dayStr + '/' + yearStr + '</td><td>' + hourStr + '
#           :' + minStr + startMid + '</td><td>' + endHourStr+ ':' + endMinStr +
#           endMid + '</td>'
        print(out)
        print('</tr>')
     


    
if __name__ == '__main__':
    main()
