from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from webdriver_manager.chrome import ChromeDriverManager

options = Options()
options.add_experimental_option("detach", True)

driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),
                          options=options)

def TestValid():
    driver.get("http://localhost:3000/Code/Account/Login.php")
    username_input = driver.find_element(By.NAME, "username")
    password_input = driver.find_element(By.NAME, "password")
    tos_check = driver.find_element(By.NAME, "check")

    username_input.send_keys("tUser")
    password_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()