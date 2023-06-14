// Libraries
#include <DHTesp.h>
#include <WiFi.h>
#include <MQTT.h>

// Pins
#define DHT_PIN 15
#define LED_BEDROOM_PIN 13
#define LED_LIVINGROOM_PIN 12
#define LED_BALCONY_PIN 14
#define LED_KITCHEN_PIN 27

// Update these with values suitable for your network.
const char* ssid = "Wokwi-GUEST";
const char* pass = "";

// Instantiate object from classes
DHTesp dhtSensor;
WiFiClient net;
MQTTClient client;

unsigned long lastMillis = 0;

// variables to store data received from smart home device
int brLedState;
int lrLedState;
int bLedState;
int kLedState;

void reconnect() {
  Serial.print("checking wifi...");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(1000);
  }

  Serial.print("\nconnecting...");
  while (!client.connect("Smart Home Device","puzzlecarpet996","N9YGEJfcFx4e6YFp")) {
    Serial.print(".");
    delay(1000);
  }

  Serial.println("\nconnected!");

  client.subscribe("app/#");
}

void messageReceived(String &topic, String &payload) {
  Serial.println("incoming: " + topic + " - " + payload);

  // Note: Do not use the client in the callback to publish, subscribe or
  // unsubscribe as it may cause deadlocks when other things arrive while
  // sending and receiving acknowledgments. Instead, change a global variable,
  // or push to a queue and handle it in the loop after calling `client.loop()`.
  if (topic.equals("app/br_lamp")) {
    brLedState = payload.toInt();
  } else if (topic.equals("app/lr_lamp")) {
    lrLedState = payload.toInt();
  } else if (topic.equals("app/b_lamp")) {
    bLedState = payload.toInt();
  } else if (topic.equals("app/k_lamp")) {
    kLedState = payload.toInt();
  }
}

void setup() {
  Serial.begin(115200);

  pinMode(LED_BEDROOM_PIN, OUTPUT);
  pinMode(LED_LIVINGROOM_PIN, OUTPUT);
  pinMode(LED_BALCONY_PIN, OUTPUT);
  pinMode(LED_KITCHEN_PIN, OUTPUT);

  WiFi.begin(ssid, pass);

  client.begin("broiler.cloud.shiftr.io", net);
  client.onMessage(messageReceived);

  dhtSensor.setup(DHT_PIN, DHTesp::DHT22);
}

void loop() {
  client.loop();
  delay(10);  // <- fixes some issues with WiFi stability

  if (!client.connected()) {
    reconnect();
  }

  digitalWrite(LED_BEDROOM_PIN, brLedState);
  digitalWrite(LED_LIVINGROOM_PIN, lrLedState);
  digitalWrite(LED_BALCONY_PIN, bLedState);
  digitalWrite(LED_KITCHEN_PIN, kLedState);

  TempAndHumidity data = dhtSensor.getTempAndHumidity();
  Serial.println("Temp: " + String(data.temperature, 2) + "°C");
  Serial.println("Humidity: " + String(data.humidity, 1) + "%");
  Serial.println("---");

  // Wait a few seconds between measurements.
  delay(2000);

  // publish a message roughly every second.
  if (millis() - lastMillis > 1000) {
    lastMillis = millis();
    client.publish("device/temp", String(data.temperature, 2), true, 1);
    client.publish("device/hum", String(data.humidity, 1), true, 1);
  }
}
