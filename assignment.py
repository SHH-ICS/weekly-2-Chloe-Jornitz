import math
print ("Welcome!")
print ("Calculate the Area and Circumference of a Circle")
print ("What is the diameter of the circle?")
diameter = input()
if diameter.isdigit == True:
  d = float(diameter)
  if d < 0:
    print ("Error")
    print ("The diameter you input is a negative number.")
    print ("Make sure to only input positive numbers.")
  else:
    r = float(d/2)
    print ("Result:")
    print ("The area of the circle is:")
    print (r**2*math.pi)
    print ("The circumference of the circle is:")
    print (d*math.pi)
else: 
  print ("Error")