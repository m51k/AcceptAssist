import requests
from bs4 import BeautifulSoup

url = 'https://www.topuniversities.com/university-rankings/world-university-rankings/2022'

page = requests.get(url)
soup = BeautifulSoup(page.content, "html.parser")

# print the html source code
# print(soup.prettify())

# Find the HTML element with class name "my-class"
university_blocks = soup.find_all("div", {"class": "_qs-ranking-data-row normal-row"})

# Extract the information for each university
for block in university_blocks:
    name = block.find("div", {"class": "td-wrap"}).text.strip()
    location = block.find("div", {"class": "location "}).text.strip()
    world_rank = block.find("div", {"class": "_univ-rank hide-this-in-mobile-indi "}).text.strip()

    # Print the extracted information
    print("Name:", name)
    print("Location:", location)
    print("World Rank:", world_rank)
    print("---")
