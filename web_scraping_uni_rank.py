import requests
from bs4 import BeautifulSoup

url = "https://www.topuniversities.com/university-rankings/world-university-rankings/2022"

page = requests.get(url)
soup = BeautifulSoup(page.content, "html.parser")

# print the html source code
print(soup.prettify())

# Find all the university information blocks on the page
university_blocks = soup.find_all("tr")

# Extract the information for each university
for block in university_blocks:
    name = block.find("td", {"class": "uni"}).text
    location = block.find("td", {"class": "location"}).text
    world_rank = block.find("td", {"class": "rank"}).text.strip()

    # Print the extracted information
    print("Name:", name)
    print("Location:", location)
    print("World Rank:", world_rank)
    print("---")
