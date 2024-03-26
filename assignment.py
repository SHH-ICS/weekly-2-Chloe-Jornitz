import math
print ("Welcome!")
print ("Calculate the Area and Circumference of a Circle")
print ("What is the diameter of the circle?")
diameter = input()
if diameter.isnumeric() == True:
  d = float(diameter)
  r = float(d/2)
  print ("Result:")
  print ("The area of the circle is:")
  print (r**2*math.pi)
  print ("The circumference of the circle is:")
  print (d*math.pi)
else: 
  print ("Error")
  print ("The diameter you input was either negative or not a number.")
  print ("Make sure to only include positive numbers and not to include letters or units.")