


void setup() {
Serial.begin(9600);
pinMode(A3,INPUT);// put your setup code here, to run once:
pinMode(A2,INPUT);
pinMode(A1,INPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
Serial.print(analogRead(A3));
Serial.print("\t");
Serial.print(analogRead(A2));
Serial.print("\t");
Serial.print(analogRead(A1));
Serial.println();
delay(100);
}
