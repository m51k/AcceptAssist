import requests
from bs4 import BeautifulSoup as Soup

url = "https://www.topuniversities.com/sites/default/files/qs-rankings-data/en/3816281_indicators.txt?rr7ebw"

page = requests.get(url)
for uni in page.json()["data"]:
    name = Soup(uni["uni"], "html.parser").select_one(".uni-link").get_text(strip=True)
    rank = uni["overall_rank"]
    rating = Soup(uni["ind_76"], "html.parser").select_one(".td-wrap-in").get_text(strip=True)
    location = uni["location"]
    print(name, rating, location, rank)

# this code works