import os
import pymysql
import datetime
connection = pymysql.connect(host='localhost',
                             user='root',
                             password='',
                             database='contract',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

cursor = connection.cursor()


DD=[]
em=''
y=[]
z=[]

query = "select ContractID from contract where ContractStat='Active'"
try:
    cursor.execute(query)
    result = cursor.fetchall()
    
    for k in result:
        ContractID = str(k)
        c = ContractID.split(": ")
        le = len(c[1])
        l = le-1
        CID = int(c[1][:l])
        print(CID)
        query1 = "select FinishDateOfContract from pdfgenerator where ContractID=%d" %CID
        try:
            cursor.execute(query1)
            result1 = cursor.fetchall()
         
            for x in result1:
                DD = str(x)
                y=DD.split(": datetime.date(")
                le=len(y[1])
                l=le-2
                z=y[1][:l]
                FDOC=z.split(", ")
                YFDOC=int(FDOC[0])*365
                MFDOC=int(FDOC[1])*30
                DFDOC=int(FDOC[2])
                TDate = YFDOC+MFDOC+DFDOC
                
        except:
            connection.rollback()
    
        query2 = "select NoticePOT from pdfgenerator where ContractID=%d" %CID
        try:
            cursor.execute(query2)
            result1 = cursor.fetchall()
         
            for j in result1:
                n = str(j)
                y=n.split(": ")
                le=len(y[1])
                l=le-1
                z=y[1][:l]
                ndate = int(z)*30
        except:
            connection.rollback()

        today = datetime.datetime.now().strftime("%Y-%m-%d")
        todayl = today.split("-")
        Ytoday = int(todayl[0])*365
        Mtoday = int(todayl[1])*30
        Dtoday = int(todayl[2])
        Ttoday = Ytoday+Mtoday+Dtoday
        Redate = TDate - Ttoday
        if 0<Redate and Redate==(ndate-2):
            print("Your contract is about to end")
        elif 0<Redate and Redate==((ndate/2)-2):
            print("Your contract is about to end")
        elif Redate==7:
            print("Your contract is about to end")
 
except:
    connection.rollback()
        
