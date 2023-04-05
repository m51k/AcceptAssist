from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from webdriver_manager.chrome import ChromeDriverManager

options = Options()
options.add_experimental_option("detach", True)

driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),
                          options=options)

def TestValid():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestValidNoTOS():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestInvalidPhone():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("invalid")  # invalid phone number
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestInvalidPass():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass2")  # invalid password
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()

def TestInvalidEmail():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()

def TestEmptyUsername():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestEmptyPass():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("")
    password2_input.send_keys("")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestEmptyPass1():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestEmptyPass2():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestEmptyMail():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("TestUser")
    username_input.send_keys("tUser")
    email_input.send_keys("")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()
    
def TestEmptyName():
    driver.get("http://localhost:3000/Code/Account/Register.php")

    name_input = driver.find_element(By.NAME, "name")
    username_input = driver.find_element(By.NAME, "username")
    email_input = driver.find_element(By.NAME, "email")
    phoneNo_input = driver.find_element(By.NAME, "phoneNo")
    country_input = driver.find_element(By.NAME, "country")
    password_input = driver.find_element(By.NAME, "password")
    password2_input = driver.find_element(By.NAME, "rePassword")
    tos_check = driver.find_element(By.NAME, "check")

    name_input.send_keys("")
    username_input.send_keys("tUser")
    email_input.send_keys("test@testmail.com")
    phoneNo_input.send_keys("0999999999")
    country_input.send_keys("testland")
    password_input.send_keys("testpass")
    password2_input.send_keys("testpass")
    tos_check.click()
    
    submit_btn = driver.find_element(By.NAME, "submit")
    submit_btn.click()

TestEmptyName()
TestEmptyMail()
TestEmptyPass()
TestEmptyPass1()
TestEmptyPass2()
TestEmptyUsername()
TestInvalidEmail()
TestInvalidPass()
TestInvalidPhone()
TestValidNoTOS()
TestValid()
TestValid() # 2nd time to test duplicate entry
