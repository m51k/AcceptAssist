import requests
from bs4 import BeautifulSoup

url = 'https://www.topuniversities.com/university-rankings/world-university-rankings/2022'

page = requests.get(url)
soup = BeautifulSoup(page.content, "html.parser")

# print the html source code
# print(soup.prettify())

# Getting the title tag
print(soup.title)

# Getting the name of the tag
print(soup.title.name)

# Getting the name of parent tag
print(soup.title.parent.name)

# Find the HTML element with class name "row ind "
# university_blocks = soup.find_all('div', class_="row ind ")
# ranking_data = soup.find('div', class_='ranking-data-load')
# print(ranking_data)

# for university_block in university_blocks:
#     print(university_block)

# print(university_blocks)

# Navigate to the specific tag using CSS selectors
ranking_data = soup.select_one('div.content > div.tab-content > div.ranking-tab > div.ranking-data-load')

university_blocks = ranking_data.find_all('div', class_="row ind ")

print(university_blocks)

# Extract the information for each university
for block in university_blocks:
    name = block.find("a", class_="uni-link")
    location = block.find("div", class_="location ")
    world_rank = block.find("div", class_="_univ-rank hide-this-in-mobile-indi ")

    # Print the extracted information
    print("Name:", name)
    print("Location:", location)
    print("World Rank:", world_rank)
    print("---")

