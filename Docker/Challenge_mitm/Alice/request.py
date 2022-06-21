from twill.commands import *
from time import sleep 

while True:
	try:
		go("http://bob/Sitedebob.html")
		showforms()
		fv("1", "name", "Alice")
		fv("1", "password", "ILoveChocolate")
		showforms()
		submit()
		show()
		#save_html()
	except:
		print("Error")
		sleep(1)
	sleep(5)
