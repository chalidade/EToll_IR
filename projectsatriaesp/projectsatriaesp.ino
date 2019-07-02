#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>
#include <IRremoteESP8266.h>
#include <IRrecv.h>
#include <IRutils.h>
#include <Servo.h>
Servo servoku;
 
const char* ssid = "Andromax-M2Y-DFFC";
const char* password = "katingcaper";
char url[100];
int ir;
const uint16_t kRecvPin = 14;
IRrecv irrecv(kRecvPin);

decode_results results;
 
void setup () {
  
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  servoku.attach(2);
  servoku.write(0);
  irrecv.enableIRIn();  
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print("Connecting..");
  }
 
}
 
void loop() {
  if ((WiFi.status() == WL_CONNECTED)&&(irrecv.decode(&results))) { //Check WiFi connection status
    serialPrintUint64(results.value, HEX);
    int ir = results.value;
    Serial.println(ir);
      // Receive the next value
    HTTPClient http;  //Declare an object of class HTTPClient
    snprintf (url, 100, "http://fahmisyaifudin.site/etoll/proses.php?id=%d", ir);
    Serial.println(url);
    http.begin(url);  //Specify request destination
    int httpCode = http.GET();
    irrecv.resume();
    Serial.println("Result");
    if (httpCode > 0) {
      // Parsing
      const size_t bufferSize = JSON_OBJECT_SIZE(2) + JSON_OBJECT_SIZE(3) + JSON_OBJECT_SIZE(5) + JSON_OBJECT_SIZE(8) + 370;
      DynamicJsonBuffer jsonBuffer(bufferSize);
      JsonObject& root = jsonBuffer.parseObject(http.getString());
      // Parameters
      int RFID = root["RFID"]; // 1
      const char* nama = root["Nama"]; //
      int Saldo = root["Saldo"];
      // Output to serial monitor
      Serial.print("RFID:");
      Serial.println(RFID);
      Serial.print("Nama:");
      Serial.println(nama);
      Serial.print("Saldo:");
      Serial.println(Saldo);
      if(Saldo==0){
        Serial.println("Maaf Saldo Habis");
      }else if(Saldo>0){
        servoku.write(90);
        delay(5000);
        servoku.write(0);
      }
      
    }
    http.end();//Close connection
 
    }
    delay(100);    //Send a request every 30 seconds
 }
