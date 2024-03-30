import math
print ("Welcome!")
print ("Calculate the Area and Circumference of a Circle")
while 1:
  print ("What is the diameter of the circle?")
  diameter = input()
  try:
    d = float(diameter)
    r = float(d/2)
    print ("Result:")
    print ("The area of the circle is:")
    print (r**2*math.pi)
    print ("The circumference of the circle is:")
    print (d*math.pi)
    break
  except:
    print ("Error!")
    print ("The diameter you input was either negative or not a number.")
    print ("Try again and make sure to only include positive numbers and not to include letters or units.")
    continue
