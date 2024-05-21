const int trigPin = 9;
const int echoPin = 10;
const int yellowLed = 13;
const int greenLed = 12;
const int redLed = 11;
const int buzzer = 8;

long duration;
int distance;

void setup() {
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(yellowLed, OUTPUT);
  pinMode(greenLed, OUTPUT);
  pinMode(redLed, OUTPUT);
  pinMode(buzzer, OUTPUT);
   
}

void loop() {
  Serial.begin(9600);
  // Clear the trigPin by setting it LOW
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);

  // Trigger the sensor by setting the trigPin HIGH for 10 microseconds
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);

  // Read the echoPin, pulseIn() returns the duration (time) in microseconds
  duration = pulseIn(echoPin, HIGH);

  // Calculate the distance in centimeters
  distance = (duration*2 ) /29.1;
  
 Serial.print("Distance: ");
  Serial.println(distance);

  // Light up LEDs based on distance
  if (distance < 10) {
    digitalWrite(redLed, HIGH);
    digitalWrite(buzzer, HIGH);
  } else if (distance < 20) {
    digitalWrite(greenLed, HIGH);
    digitalWrite(redLed, LOW);
    digitalWrite(buzzer, LOW);
  } else if (distance < 30) {
    digitalWrite(yellowLed, HIGH);
    digitalWrite(greenLed, LOW);
    digitalWrite(redLed, LOW);
    digitalWrite(buzzer, LOW);
  } else {
    digitalWrite(redLed, LOW);
    digitalWrite(greenLed, LOW);
    digitalWrite(yellowLed, LOW);
    digitalWrite(buzzer, LOW);
  }
  
  // Delay before the next reading
  delay(100);
}
