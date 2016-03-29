#!/usr/bin/python
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.cleanup()
GPIO.setwarnings(False)
GPIO.setup(2,GPIO.OUT)
print "Lights off"
GPIO.output(2,GPIO.LOW)

