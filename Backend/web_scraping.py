import requests
from bs4 import BeautifulSoup

url = "https://www.example.com/university-admission-requirements"

page = requests.get(url)
soup = BeautifulSoup(page.content, "html.parser")

# Extract the information on minimum scores for the GRE, GPA, TOEFL, and SOP/LOR
# GRE score
gre_score = soup.find("div", {"id": "gre_score"})
if gre_score:
    gre_score = gre_score.text
else:
    gre_score = "not found"

# GPA score
gpa_score = soup.find("div", {"id": "gpa_score"})
if gpa_score:
    gpa_score = gpa_score.text
else:
    gpa_score = "not found"

# TOEFL score
toefl_score = soup.find("div", {"id": "toefl_score"})
if toefl_score:
    toefl_score = toefl_score.text
else:
    toefl_score = "not found"

# SOP score
sop_score = soup.find("div", {"id": "sop_score"})
if sop_score:
    sop_score = sop_score.text
else:
    sop_score = "not found"

# LOR score
lor_score = soup.find("div", {"id": "lor_score"})
if lor_score:
    lor_score = lor_score.text
else:
    lor_score = "not found"

# Print the extracted information
print("Minimum GRE Score:", gre_score)
print("Minimum GPA Score:", gpa_score)
print("Minimum TOEFL Score:", toefl_score)
print("Minimum SOP Score:", sop_score)
print("Minimum LOR Score:", lor_score)
