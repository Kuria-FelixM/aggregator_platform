
import requests
from bs4 import BeautifulSoup

url ="https://www.kaba.co.ke"
url1 ="https://www.gigimotors.co.ke/view-stock"

r = requests.get(url).text
r1 = requests.get(url).text

soup = BeautifulSoup(r,"lxml")

names = soup.find_all("h5", class_ ="add-title")

data = []

for i in names:
    data.append(i.text)
    
    
price = soup.find_all("h4",class_ ="item-price")

for i in price:
    data.append(i.text)
    
    print(data)
    


