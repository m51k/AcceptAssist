import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestRegressor
from sklearn.model_selection import train_test_split

def randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research):
    data = pd.read_csv('admit.csv')
    X = data.iloc[:, 1:8] # features
    y = data.iloc[:, 8] # target
    
    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)
    
    regressor = RandomForestRegressor(n_estimators=100, max_depth=5)
    
    regressor.fit(X_train, y_train)
    
    prediction = regressor.predict([[gre, toefl, rating, sop, lor, cgpa, research]])
    
    return prediction