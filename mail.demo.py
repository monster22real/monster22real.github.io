import os
import smtplib
import imghdr
from email.message import EmailMessage
import pymysql
import urllib.parse

connection = pymysql.connect(host='localhost',
                             user='root',
                             password='',
                             database='contract',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

cursor = connection.cursor()


listt=[]
em=''
y=[]
z=[]
i=True
while i:
    contract=input("Enter the contract ID: ")
    if contract.isnumeric():
        contract=int(contract)
        i=False

        query1 = "select ConsulEmail from pdfgenerator where ContractID=%d" %contract
        try:
            cursor.execute(query1)
            result1 = cursor.fetchall()
         
            for x in result1:
                listt=str(x)
                y=listt.split(": '")
                le=len(y[1])
                l=le-2
                z=y[1][:l]
 
                
        except:
            connection.rollback()

        
   
        EMAIL_ADDRESS = 'kmengsloy9@gmail.com'
        EMAIL_PASSWORD = 'qiznftffeupkhicz'

        

        msg = EmailMessage()
        msg['Subject'] = 'New email contract'
        msg['From'] = EMAIL_ADDRESS
        msg['To'] = z
        #msg['To'] = ','.join(contacts)
        msg.set_content('pdf is attached below...')


        files =[f'{contract}.pdf']
            
        for file in files:
            with open(file, 'rb') as f:
                file_data = f.read()
                file_name = f.name

            msg.add_attachment(file_data, maintype='application', subtype='octet-stream', filename=file_name)

        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
            smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
            smtp.send_message(msg)
            
        print("Email is sent successfully")

    else:
        print("Please input the valid ContractID")
        print("")
