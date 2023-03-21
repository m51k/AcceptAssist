import requests
from bs4 import BeautifulSoup as Soup
import mysql.connector

url = "https://www.topuniversities.com/sites/default/files/qs-rankings-data/en/3816281_indicators.txt?rr7ebw"

page = requests.get(url)
    
def getUniData(webpage):
    uniNames = []
    uniRanks = []
    uniRatings = []
    uniLocations = []
    
    for uni in webpage.json()["data"]:
        name = Soup(uni["uni"], "html.parser").select_one(".uni-link").get_text(strip=True)
        uniNames.append(name)
        rank = uni["overall_rank"]
        uniRanks.append(rank)
        rating = Soup(uni["ind_76"], "html.parser").select_one(".td-wrap-in").get_text(strip=True)
        uniRatings.append(rating)
        location = uni["location"]
        uniLocations.append(location)
    
    return uniNames, uniRanks, uniRatings, uniLocations

def populateTable(uniName, uniRank, uniRating, uniLocation):
    insert_query = "INSERT INTO university_rankings (Name, Rank, Rating, Locations) VALUES (%s, %s, %s, %s)"
    values = (uniName, uniRank, uniRating, uniLocation)
    return insert_query, values

names, ranks, ratings, locations = getUniData(page)

conn = mysql.connector.connect(
    host = "localhost",
    user = "root",
    database = "acceptassistdatabase"
)

cursor = conn.cursor()
query, values = populateTable(names[0], ranks[0], ratings[0], locations[0])     # this is a test
createTableQuery = """
CREATE TABLE university_rankings (
    Name varchar(255) NOT NULL,
    Rank varchar(255) NOT NULL,
    Rating varchar(255) NOT NULL,
    Locations varchar(255) NOT NULL
)
"""
cursor.execute(createTableQuery)
cursor.execute(query, values)

# commit changes into the database
conn.commit()

cursor.close()
conn.close()