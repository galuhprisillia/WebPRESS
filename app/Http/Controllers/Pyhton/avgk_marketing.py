# analyse_string.py
#!/usr/bin/python

from mysql.connector import Error
import pandas as pd
import numpy as np
from sklearn import neighbors, datasets
from sklearn.metrics.pairwise import euclidean_distances
from sklearn import preprocessing 
import mysql.connector
import matplotlib.pyplot as plt
import os

n_neighbors = 5

csvFile = "C:/wamp/www/webpress/app/Http/Controllers/Pyhton/alldata_marketing.csv"

pwd = os.getcwd()
os.chdir(os.path.dirname(csvFile))
AK  = pd.read_csv(os.path.basename(csvFile))
os.chdir(pwd)

# we create an instance of Neighbours Classifier and fit the data.ps.KN
# prepare data
X = AK.drop(["Nama","NISN", "status"], axis = 1) 
y = AK["status"]
h = .02 
 
# we create an instance of Neighbours Classifier and fit the data.
clf = neighbors.KNeighborsClassifier(n_neighbors, p=2, weights='distance')
clf.fit(X, y)

try:
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="webpress_db"
        )

    mycursor = mydb.cursor(dictionary=True)
    sql_select_query = ("SELECT nisn, id, mtk_1, b_indo_1, b_ing_1, p_e_b_1, s_d_1, a_r_p_1, p_p_1, p_u_p_1, s_p_1, p_o_1, mtk_2, b_indo_2, b_ing_2, p_e_b_2, s_d_2, a_r_p_2, p_p_2, p_u_p_2, s_p_2, p_o_2, mtk_3, b_indo_3, b_ing_3, p_e_b_3, p_p_b_3, p_e_p_3, p_b_d_3, k_b_3, a_b_3, a_t_3, p_y_p_3, mtk_4, b_indo_4, b_ing_4, p_e_b_4, p_p_b_4, p_e_p_4, p_b_d_4, k_b_4, a_b_4, a_t_4, p_y_p_4, mtk_5, b_indo_5, b_ing_5, p_p_b_5, p_e_p_5, p_b_d_5, k_b_5, a_b_5, a_t_5, p_y_p_5, status, university FROM marketing")
    mycursor.execute(sql_select_query)
    myresult = mycursor.fetchall()

    for z in myresult :
        
        nisn = z["nisn"]
        id = z["id"]
        mtk_1 = z["mtk_1"]
        b_indo_1 = z["b_indo_1"]
        b_ing_1 = z["b_ing_1"]
        p_e_b_1 = z["p_e_b_1"]
        s_d_1 = z["s_d_1"]
        a_r_p_1 = z["a_r_p_1"]
        p_p_1 = z["p_p_1"]
        p_u_p_1 = z["p_u_p_1"]
        s_p_1 = z["s_p_1"]
        p_o_1 = z["p_o_1"]
        mtk_2 = z["mtk_2"]
        b_indo_2 = z["b_indo_2"]
        b_ing_2 = z["b_ing_2"]
        p_e_b_2 = z["p_e_b_2"]
        s_d_2 = z["s_d_2"]
        a_r_p_2 = z["a_r_p_2"]
        p_p_2 = z["p_p_2"]
        p_u_p_2 = z["p_u_p_2"]
        s_p_2 = z["s_p_2"]
        p_o_2 = z["p_o_2"]
        mtk_3 = z["mtk_3"]
        b_indo_3 = z["b_indo_3"]
        b_ing_3 = z["b_ing_3"]
        p_e_b_3 = z["p_e_b_3"]
        p_p_b_3 = z["p_p_b_3"]
        p_e_p_3 = z["p_e_p_3"]
        p_b_d_3 = z["p_b_d_3"]
        k_b_3 = z["k_b_3"]
        a_b_3 = z["a_b_3"]
        a_t_3 = z["a_t_3"]
        p_y_p_3 = z["p_y_p_3"]
        mtk_4 = z["mtk_4"]
        b_indo_4 = z["b_indo_4"]
        b_ing_4 = z["b_ing_4"]
        p_e_b_4 = z["p_e_b_4"]
        p_p_b_4 = z["p_p_b_4"]
        p_e_p_4 = z["p_e_p_4"]
        p_b_d_4 = z["p_b_d_4"]
        k_b_4 = z["k_b_4"]
        a_b_4 = z["a_b_4"]
        a_t_4 = z["a_t_4"]
        p_y_p_4 = z["p_y_p_4"]
        mtk_5 = z["mtk_5"]
        b_indo_5 = z["b_indo_5"]
        b_ing_5 = z["b_ing_5"]
        p_p_b_5 = z["p_p_b_5"]
        p_e_p_5 = z["p_e_p_5"]
        p_b_d_5 = z["p_b_d_5"]
        k_b_5 = z["k_b_5"]
        a_b_5 = z["a_b_5"]
        a_t_5 = z["a_t_5"]
        p_y_p_5 = z["p_y_p_5"]
        status = z["status"]
        university = z["university"]
    
        AVGK1 = (p_e_b_1 + s_d_1 + a_r_p_1 + p_p_1 + p_u_p_1 + s_p_1 + p_o_1)/7
        AVGK2 = (p_e_b_2 + s_d_2 + a_r_p_2 + p_p_2 + p_u_p_2 + s_p_2 + p_o_2)/7
        AVGK3 = (p_e_b_3 + p_p_b_3 + p_e_p_3 + p_b_d_3 + k_b_3 + a_b_3 + a_t_3 + p_y_p_3)/8
        AVGK4 = (p_e_b_4 + p_p_b_4 + p_e_p_4 + p_b_d_4 + k_b_4 + a_b_4 + a_t_4 + p_y_p_4)/8
        AVGK5 = (p_p_b_5 + p_e_p_5 + p_b_d_5 + k_b_5 + a_b_5 + a_t_5 + p_y_p_5)/7
        
        plt.figure()
        x_series = ["1", "2", "3", "4", "5"]
        y_series_1 = [mtk_1, mtk_2, mtk_3, mtk_4, mtk_5]
        y_series_2 = [b_indo_1, b_indo_2, b_indo_3, b_indo_4, b_indo_5]
        y_series_3 = [b_ing_1, b_ing_2, b_ing_3, b_ing_4, b_ing_5]
        y_series_4 = [AVGK1, AVGK2, AVGK3, AVGK4, AVGK5]
        plt.plot(x_series, y_series_1)
        plt.plot(x_series, y_series_2)
        plt.plot(x_series, y_series_3)
        plt.plot(x_series, y_series_4)
        plt.xlabel("Semester")
        plt.ylabel("Score")
        plt.title("Score of Five Subject for SNMPTN Prediction")
        plt.plot(x_series, y_series_1, label="Mathematics", color="#EE82EE")
        plt.plot(x_series, y_series_2, label="Bahasa Indonesia", color="#FA8072")
        plt.plot(x_series, y_series_3, label="English", color="#6495ED")
        plt.plot(x_series, y_series_4, label="Vocational Competency", color="#00FF7F")
        plt.legend(loc="upper left")
        plt.savefig(str(nisn)+".png", bbox_inches='tight')
        
        dataClass = clf.predict([[mtk_1, b_indo_1, b_ing_1, AVGK1, mtk_2, b_indo_2, b_ing_2, AVGK2, mtk_3, b_indo_3, b_ing_3, AVGK3, mtk_4, b_indo_4, b_ing_4, AVGK4, mtk_5, b_indo_5, b_ing_5, AVGK5]])
    
        sql_update_query = ("UPDATE marketing set status = %s, university = %s WHERE id = %s")
        input0 = ('NOT ACCEPTED', '', id)
        input1 = ('ACCEPTED', 'UNIVERSITAS UPN VETERAN JAKARTA', id)
        input2 = ('ACCEPTED', 'UNIVERSITAS TIDAR', id)
        input3 = ('ACCEPTED', 'UNIVERSITAS NEGERI JAKARTA', id)

        if dataClass == 0:
            mycursor.execute(sql_update_query, input0)
            mydb.commit()
        elif dataClass == 1:
            mycursor.execute(sql_update_query, input1)
            mydb.commit()
        elif dataClass == 2:
            mycursor.execute(sql_update_query, input2)
            mydb.commit()
        else:
            mycursor.execute(sql_update_query, input3)
            mydb.commit()
    
except Error as e:
    print("Error reading data from MySQL table", e)
finally:
    if (mydb.is_connected()):
        mydb.close()
        mycursor.close()