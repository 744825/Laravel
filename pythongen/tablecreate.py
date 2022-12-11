
import os

print(os.getcwd()+ "/test.txt")
f = open(os.getcwd()+ "/test.txt", 'a')
f.write("\nstuff")
f.close()
