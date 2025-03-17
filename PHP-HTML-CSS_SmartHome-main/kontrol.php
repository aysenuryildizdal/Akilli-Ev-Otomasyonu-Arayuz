<?php
$sayfa = "kontrol";
include ("php/vt.php");
include ("php/girhead2.php");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akıllı Ev Kontrol Paneli</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="css/konstyle.css" rel="stylesheet" />
  <style>

  </style>
</head>

<body>
  <div class="dashboard">
    <header>
      <div class="weather">
        <div>
          <strong id="temperature">26°<sup>C</sup></strong>
          <p>İç Mekan Sıcaklığı</p>
        </div>
        <div>
          <strong id="humidity">48.2%</strong>
          <p>Dış Mekan Nemi</p>
        </div>
        <div>
          <strong id="indoor-humidity">52.99%</strong>
          <p>İç Mekan Nemi</p>
        </div>
        <div class="climate-control">
          <div class="controls">
            <button onclick="decreaseTemperature()"><i class="fas fa-arrow-down"></i> </button>
            <button onclick="increaseTemperature()"><i class="fas fa-arrow-up"></i> </button>
          </div>
          <div class="controls">
            <button onclick="decreaseHumidity()"><i class="fas fa-arrow-down"></i> </button>
            <button onclick="increaseHumidity()"><i class="fas fa-arrow-up"></i> </button>
          </div>
        </div>
        <div class="utilities">
          <div class="controls">
            <button id="electricity-button" onclick="toggleElectricity()">Elektrik <span
                id="electricity-status">Açık</span></button>
          </div>
          <div class="controls">
            <button id="water-button" onclick="toggleWater()" class="water-button">Su <span
                id="water-status">Açık</span></button>
            <button id="gas-button" onclick="toggleGas()" class="gas-button">Doğalgaz <span
                id="gas-status">Açık</span></button>
          </div>
        </div>
      </div>
    </header>


    <section>
      <div class="category">
        <ul>
          <li><a href="#!" class="active" id="living-room-tab">Oturma Odası</a></li>
          <li><a href="#!" id="kitchen-tab">Mutfak</a></li>
          <li><a href="#!" id="dining-room-tab">Yatak Odası</a></li>
          <li><a href="#!" id="weather-tab">Kameralar</a></li>
        </ul>
      </div>


      <div id="living-room-content">
        <h3>Oturma Odası</h3>
        <div class="appliances">
          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="a" id="a">
              <span class="slider"></span>
            </label>
            <label for="a">
              <i class="fas fa-wifi"></i>
              <strong>WF (Router)</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>

          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="a" id="a">
              <span class="slider"></span>
            </label>
            <label for="a">
              <i class="fas fa-lightbulb"></i>
              <strong>Lamba</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>

          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="c" id="c">
              <span class="slider"></span>
            </label>
            <label for="c">
              <i class="fas fa-fan"></i>
              <strong>Klima</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>
          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="d" id="d">
              <span class="slider"></span>
            </label>
            <label for="d">
              <i class="fas fa-tv"></i>
              <strong>TV</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>
          <div class="appliance">
            <label>
              <i class="fas fa-window-maximize"></i>
              <strong>Perde</strong>
              <div class="pslider-container">
                <div class="slider-wrapper">
                  <input type="range" min="0" max="100" value="0" class="pslider" id="perdeSlider">
                  <div class="pslider-fill" id="perdeFill"></div>
                </div>
                <span id="perdeOpeningPercentage">%0</span>
              </div>
              <span id="perdeStatus" data-o="Açık" data-c="Kapalı">Kapalı</span>
            </label>
          </div>
        </div>

        <div class="living-room">
          <img id="living-room-image" src="images/ev1.jpg" alt="Oturma Odası">
        </div>
      </div>
      <!-- Mutfak -->
      <div id="kitchen-content" style="display: none;">
        <h3>Mutfak</h3>
        <div class="appliances">
          <div class="appliance">
            <label for="d">
              <i class="fas fa-refrigerator"></i>
              <strong>Buzdolabı</strong>
              <div class="appliance-info">
                <p>Meyve/Sebze Durumu: <span id="produce-status">Taze</span></p>
                <button id="check-button" onclick="checkProduceStatus()">Kontrol Et</button>
                <div id="camera-feed" style="display: none;">
                  <img src="images/fridge.png" alt="Buzdolabı İçi Görüntüsü" width="400px">
                </div>
                <div id="missing-items" style="display: none;">
                  <h4>Eksik Ürünler:</h4>
                  <ul id="missing-items-list"></ul>
                </div>
                <div id="weekly-cost" style="display: none;">
                  <h4>Haftalık Meyve/Sebze Gideri:</h4>
                  <p id="weekly-cost-amount"></p>
                </div>
              </div>
            </label>
          </div>


          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="b" id="b">
              <span class="slider"></span>
            </label>
            <label for="b">
              <i class="fas fa-lightbulb"></i>
              <strong>Lamba</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>

          <div class="appliance">
            <label>
              <i class="fas fa-window-maximize"></i>
              <strong>Perde</strong>
              <div class="pslider-container">
                <div class="slider-wrapper">
                  <input type="range" min="0" max="100" value="0" class="pslider" id="perdeSlider">
                  <div class="pslider-fill" id="perdeFill"></div>
                </div>
                <span id="perdeOpeningPercentage">%0</span>
              </div>
              <span id="perdeStatus" data-o="Açık" data-c="Kapalı">Kapalı</span>
            </label>
          </div>
        </div>
        <div class="living-room">
          <img id="living-room-image" src="images/mutfak.png" alt="Oturma Odası">
        </div>
      </div>


      <!-- Yemek Odası -->
      <div id="dining-room-content" style="display: none;">
        <h3>Yatak Odası</h3>
        <div class="appliances">

          <div class="appliance">
            <label class="switch">
              <input type="checkbox" name="b" id="b">
              <span class="slider"></span>
            </label>
            <label for="b">
              <i class="fas fa-lightbulb"></i>
              <strong>Lamba</strong>
              <span data-o="Açık" data-c="Kapalı"></span>
            </label>
          </div>
          <div class="appliance">
            <label>
              <i class="fas fa-window-maximize"></i>
              <strong>Perde</strong>
              <div class="pslider-container">
                <div class="slider-wrapper">
                  <input type="range" min="0" max="100" value="0" class="pslider" id="perdeSlider">
                  <div class="pslider-fill" id="perdeFill"></div>
                </div>
                <span id="perdeOpeningPercentage">%0</span>
              </div>
              <span id="perdeStatus" data-o="Açık" data-c="Kapalı">Kapalı</span>
            </label>
          </div>
        </div>
        <div class="living-room">
          <img id="living-room-image" src="images/yatak.jpg" alt="Oturma Odası">
        </div>
      </div>
      <div id="weather-content" style="display: none;">
        <h3>Kameralar</h3>
        <div class="appliances">
          <div class="living-room">
            <h3>mutfak</h3>
            <img id="living-room-image" src="images/mcam.jpg" alt="Oturma Odası" width="400px">
          </div>

          <div class="living-room">
            <h3>Oturma Odası</h3>
            <img id="living-room-image" src="images/cam.jpg" alt="Oturma Odası" width="400" px>
          </div>

          <div class="living-room">
            <h3>Yatak Odası</h3>
            <img id="living-room-image" src="images/cam.jpg" alt="Oturma Odası" width="400 " px>
          </div>
        </div>
        <div class="appliances">
          <div class="living-room">
            <h3>Garaj</h3>
            <img id="living-room-image" src="images/cam.jpg" alt="Oturma Odası" width="400 " px>
          </div>
          <div class="living-room">
            <h3>Dışarı1</h3>
            <img id="living-room-image" src="images/cam.jpg" alt="Oturma Odası" width="400 " px>
          </div>
          <div class="living-room">
            <h3>Kapı1</h3>
            <img id="living-room-image" src="images/cam.jpg" alt="Oturma Odası" width="400 " px>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    let produceStatus = "Taze";
    let missingItems = [];
    let weeklyProduceCost = 0;
    let produceItems = [
      { name: "Elma", type: "meyve", freshness: 0 },
      { name: "Muz", type: "meyve", freshness: 0 },
      { name: "Portakal", type: "meyve", freshness: 0 },
      { name: "Havuç", type: "sebze", freshness: 0 },
      { name: "Domates", type: "sebze", freshness: 0 },
      { name: "Salatalık", type: "sebze", freshness: 0 }
    ];

    function checkProduceStatus() {
      // Meyve/Sebze sensöründen veri oku
      let randomIndex = Math.floor(Math.random() * produceItems.length);
      let currentItem = produceItems[randomIndex];
      currentItem.freshness = Math.floor(Math.random() * 100);
      let sensorData = currentItem.freshness > 70 ? "Taze" : "Bozulmuş";
      produceStatus = sensorData;
      updateProduceStatus();

      // Kamerayı aç ve görüntüyü göster
      showCameraFeed();

      // Eksik ürünleri kontrol et ve raporla
      checkMissingItems();

      // Haftalık meyve/sebze giderini hesapla ve raporla
      calculateWeeklyProduceCost();
      checkButtonClicked = true;
      document.getElementById("check-button").disabled = true;
    }

    function updateProduceStatus() {
      document.getElementById("produce-status").textContent = produceStatus;
    }

    function showCameraFeed() {
      document.getElementById("camera-feed").style.display = "block";
    }

    function hideCameraFeed() {
      document.getElementById("camera-feed").style.display = "none";
    }

    function checkMissingItems() {
      // Buzdolabındaki ürünleri kontrol et ve eksik olanları belirle
      missingItems = [];
      let randomCount = Math.floor(Math.random() * 3);
      for (let i = 0; i < randomCount; i++) {
        let randomIndex = Math.floor(Math.random() * produceItems.length);
        missingItems.push(produceItems[randomIndex].name);
      }
      showMissingItems();
    }

    function showMissingItems() {
      let missingItemsList = document.getElementById("missing-items-list");
      missingItemsList.innerHTML = "";

      if (missingItems.length > 0) {
        document.getElementById("missing-items").style.display = "block";
        missingItems.forEach(item => {
          let listItem = document.createElement("li");
          listItem.textContent = item;
          missingItemsList.appendChild(listItem);
        });
      } else {
        document.getElementById("missing-items").style.display = "none";
      }
    }

    function calculateWeeklyProduceCost() {
      // Meyve/Sebze alışveriş giderini hesapla
      weeklyProduceCost = 0;
      let randomCount = Math.floor(Math.random() * 10) + 5; // 5-14 arası rastgele sayı
      for (let i = 0; i < randomCount; i++) {
        let randomIndex = Math.floor(Math.random() * produceItems.length);
        let item = produceItems[randomIndex];
        let freshness = Math.floor(Math.random() * 100);
        item.freshness = freshness;
        if (item.type === "meyve") {
          weeklyProduceCost += Math.floor(Math.random() * 10) + 5; // 5-14 TL arası rastgele fiyat
        } else {
          weeklyProduceCost += Math.floor(Math.random() * 5) + 2; // 2-6 TL arası rastgele fiyat
        }
      }
      weeklyProduceCost = Math.round(weeklyProduceCost);
      showWeeklyProduceCost();
    }

    function showWeeklyProduceCost() {
      document.getElementById("weekly-cost-amount").textContent = `${weeklyProduceCost} TL`;
      document.getElementById("weekly-cost").style.display = "block";
    }


    function calculateWeeklyProduceCost() {
      // Meyve/Sebze alışveriş giderini hesapla
      weeklyProduceCost = Math.floor(Math.random() * 50) + 20; // Örnek bir hesaplama
      showWeeklyProduceCost();
    }

    function showWeeklyProduceCost() {
      document.getElementById("weekly-cost-amount").textContent = `${weeklyProduceCost} TL`;
      document.getElementById("weekly-cost").style.display = "block";
    }
    let isElectricityOn = true;
    let isWaterOn = true;
    let isGasOn = true;

    function toggleElectricity() {
      isElectricityOn = !isElectricityOn;
      updateElectricityStatus();
    }

    function toggleWater() {
      isWaterOn = !isWaterOn;
      updateWaterStatus();
    }

    function toggleGas() {
      isGasOn = !isGasOn;
      updateGasStatus();
    }

    function updateElectricityStatus() {
      let electricityStatus = document.getElementById("electricity-status");
      electricityStatus.textContent = isElectricityOn ? "Açık" : "Kapalı";
    }

    function updateWaterStatus() {
      let waterButton = document.getElementById("water-button");
      let waterStatus = document.getElementById("water-status");
      waterStatus.textContent = isWaterOn ? "Açık" : "Kapalı";
      waterButton.classList.toggle("closed", !isWaterOn);
    }

    function updateGasStatus() {
      let gasButton = document.getElementById("gas-button");
      let gasStatus = document.getElementById("gas-status");
      gasStatus.textContent = isGasOn ? "Açık" : "Kapalı";
      gasButton.classList.toggle("closed", !isGasOn);
    }

    let perdeOpeningPercentage = 0;

    function updatePerdeOpeningPercentage() {
      let perdeSlider = document.getElementById("perdeSlider");
      perdeOpeningPercentage = parseInt(perdeSlider.value);
      document.getElementById("perdeOpeningPercentage").textContent = `%${perdeOpeningPercentage}`;

      // Perde durumunu güncelle
      let perdeStatus = document.getElementById("perdeStatus");
      if (perdeOpeningPercentage === 0) {
        perdeStatus.textContent = perdeStatus.dataset.c;
      } else {
        perdeStatus.textContent = perdeStatus.dataset.o;
      }
    }

    document.getElementById("perdeSlider").addEventListener("input", updatePerdeOpeningPercentage);


    // Kategori seçicileri
    const livingRoomTab = document.getElementById('living-room-tab');
    const kitchenTab = document.getElementById('kitchen-tab');
    const diningRoomTab = document.getElementById('dining-room-tab');
    const weatherTab = document.getElementById('weather-tab');

    // İçerik alanları
    const livingRoomContent = document.getElementById('living-room-content');
    const kitchenContent = document.getElementById('kitchen-content');
    const diningRoomContent = document.getElementById('dining-room-content');
    const weatherContent = document.getElementById('weather-content');

    // Kategori seçicilerine tıklanma olaylarını ekle
    livingRoomTab.addEventListener('click', showLivingRoomContent);
    kitchenTab.addEventListener('click', showKitchenContent);
    diningRoomTab.addEventListener('click', showDiningRoomContent);
    weatherTab.addEventListener('click', showWeatherContent);

    function showLivingRoomContent() {
      livingRoomContent.style.display = 'block';
      kitchenContent.style.display = 'none';
      diningRoomContent.style.display = 'none';
      weatherContent.style.display = 'none';

      livingRoomTab.classList.add('active');
      kitchenTab.classList.remove('active');
      diningRoomTab.classList.remove('active');
      weatherTab.classList.remove('active');
    }

    function showKitchenContent() {
      kitchenContent.style.display = 'block';
      livingRoomContent.style.display = 'none';
      diningRoomContent.style.display = 'none';
      weatherContent.style.display = 'none';

      kitchenTab.classList.add('active');
      livingRoomTab.classList.remove('active');
      diningRoomTab.classList.remove('active');
      weatherTab.classList.remove('active');
    }

    function showDiningRoomContent() {
      diningRoomContent.style.display = 'block';
      livingRoomContent.style.display = 'none';
      kitchenContent.style.display = 'none';
      weatherContent.style.display = 'none';

      diningRoomTab.classList.add('active');
      livingRoomTab.classList.remove('active');
      kitchenTab.classList.remove('active');
      weatherTab.classList.remove('active');
    }

    function showWeatherContent() {
      weatherContent.style.display = 'block';
      livingRoomContent.style.display = 'none';
      kitchenContent.style.display = 'none';
      diningRoomContent.style.display = 'none';

      weatherTab.classList.add('active');
      livingRoomTab.classList.remove('active');
      kitchenTab.classList.remove('active');
      diningRoomTab.classList.remove('active');
    }


    let temperature = 26;
    let humidity = 48.2;
    let indoorHumidity = 52.99;

    function updateClimateControls() {
      document.getElementById('temperature').textContent = temperature.toFixed(0) + '°C';
      document.getElementById('humidity').textContent = humidity.toFixed(1) + '%';
      document.getElementById('indoor-humidity').textContent = indoorHumidity.toFixed(2) + '%';
    }

    function decreaseTemperature() {
      if (temperature > 18) {
        temperature -= 1;
        updateClimateControls();
      }
    }

    function increaseTemperature() {
      if (temperature < 32) {
        temperature += 1;
        updateClimateControls();
      }
    }

    function decreaseHumidity() {
      if (humidity > 30) {
        humidity -= 2;
        indoorHumidity -= 2;
        updateClimateControls();
      }
    }

    function increaseHumidity() {
      if (humidity < 70) {
        humidity += 2;
        indoorHumidity += 2;
        updateClimateControls();
      }
    }

    updateClimateControls();
  </script>
</body>

</html>