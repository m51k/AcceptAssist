import numpy as np
import pandas as pd
from sklearn.neighbors import KNeighborsRegressor
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler

# dataset that contains the GRE and TOEFL scores along with the university acceptance percentage
# not created yet
data = pd.read_csv()



# split the data into training and testing sets using a 70:30 split ratio
X = data.iloc[:, :-1].values
y = data.iloc[:, -1].values

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)


# KNN model with k=5:
knn = KNeighborsRegressor(n_neighbors=5)
knn.fit(X_train, y_train)


# use the trained model to predict the university acceptance percentage
# for a new student based on their GRE and TOEFL scores
new_student_scores = np.array([[320, 110]])
new_student_scores_scaled = sc.transform(new_student_scores)

predicted_acceptance_percentage = knn.predict(new_student_scores_scaled)
print(f"Predicted acceptance percentage: {predicted_acceptance_percentage[0]:.2f}%")
