//rendering script
const DATA = {
  "customerDetails": null,
  "advisors": [
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 100,
      "profilePicUrl": "https://turtlemint-stage.dreamhosters.com/wp-content/themes/turtlemint/tm-assets/img/tm-img/kaleen.png"
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 200
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 300
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 400
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 500
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 600
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 700
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 800
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 900
      },
      {
      "partnerId": "56cdef",
      "partnerName": "Munna Bhaiya",
      "area": "Andheri West",
      "city": "Mumbai",
      "pinCode": null,
      "yearsOfExperience": 5.0,
      "customersServed": 10
      }
  ]
  }
  
  async function getPincodeLocation(pincode){
      try{
          let headersList = {
          "Content-Type": "application/json"
          }
          let response = await fetch("https://f57dcbf8-35f1-49ea-8ed8-3e8e74f6432a.mock.pstmn.io/api/agent-locator/pin-details/"+pincode, { 
              method: "GET",
              headers: headersList
          });
          let data = await response.json();
          console.log(data)
          if(data.area && data.city && data.city){
              window.tm_pincode_data = data
              $('#pincode-filter-input').text(pincode)
              return data;
          }
          else{
              console.log('error')
              throw 'Pincode not found';
          }
      }
      catch(err){
          // return {
          //     'error': true,
          //     'info': 'Pincode not found',
          //     'data': err
          // }
  
          //TODO replace return
          $('#pincode-filter-input').text(pincode)
          window.window.tm_pincode_data= {
              "pincode": pincode
          }
          return {
              "id": pincode,
              "pincode": pincode,
              "area": "Patto",
              "city": "Panjim",
              "state": "Goa"
          }
      }
  }
  
  async function getAdvisorList(pincode, vertical, offset) {
      try{
          let headersList = {
          "Content-Type": "application/json"
          }
          let bodyContent = JSON.stringify({
              "pinCode": pincode,
              "vertical": vertical
          });
          let response = await fetch("https://f57dcbf8-35f1-49ea-8ed8-3e8e74f6432a.mock.pstmn.io/api/agent-locator/advisors?offset=0&limit=10", { 
              method: "POST",
              body: bodyContent,
              headers: headersList
          });
          let data = await response.json();
          console.log(data)
          //TODO pass data instead of DATA
          data.advisors.length > 0 ? renderContent(DATA): renderEmptyScreen();
      }
      catch(err){
          console.log(err)
          // TODO render empty screen instead of DATA
          // renderEmptyScreen()
          renderContent(DATA)
      }
  }
  
  function renderContent(data){
      let firstFoldParent = document.getElementById('firstFoldList')
      let lastFoldParent = document.getElementById('lastFoldList');
      let htmlFirstFold = ''
      let htmlLastFold = ''
      console.log(data.advisors.slice(3))
      data.advisors.slice(0, 3).forEach( advisor => {
          htmlFirstFold += `<div class="tm-advisor-wrap">
          <div class="advisor-card">
              <div class="advisor-card__wraper">
                  <div class="advisor-image">
                      ${ advisor.profilePicUrl ? '<img src="'+advisor.profilePicUrl+'" alt="'+window.tm_vertical_data+' Insurance advisor in '+advisor.city+'">' : '' }
                  </div>
                  <p class="tm-h2-bold advisor-name">${advisor.partnerName}</p>
                  <p class="tm-body tm-grey-text advisor-location">${advisor.area}, ${advisor.city}</p>
                  <div class="row tm-stats">
                      <div class="col-6 stat">
                          <p class="tm-h2-regular stat-title">${Math.floor(advisor.yearsOfExperience)} Years</p>
                          <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                      </div>
                      <div class="col-6 stat">
                          <p class="tm-h2-regular stat-title">${Math.floor(advisor.customersServed)}+</p>
                          <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                      </div>
                  </div>
                  <a onclick="openPopup('getInTouchPopup')" class="tm-button">Get In Touch</a>
              </div>
          </div>
      </div>`
      });
      if(data.advisors.length > 3){
          data.advisors.slice(3).forEach( advisor => {
              htmlLastFold += `<div class="tm-advisor-wrap">
              <div class="advisor-card">
                  <div class="advisor-card__wraper">
                      <div class="advisor-image">
                        ${ advisor.profilePicUrl ? '<img src="'+advisor.profilePicUrl+'" alt="'+window.tm_vertical_data+' Insurance advisor in '+advisor.city+'">' : '' }
                      </div>
                      <p class="tm-h2-bold advisor-name">${advisor.partnerName}</p>
                      <p class="tm-body tm-grey-text advisor-location">${advisor.area}, ${advisor.city}</p>
                      <div class="row tm-stats">
                          <div class="col-6 stat">
                              <p class="tm-h2-regular stat-title">${Math.floor(advisor.yearsOfExperience)} Years</p>
                              <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                          </div>
                          <div class="col-6 stat">
                              <p class="tm-h2-regular stat-title">${Math.floor(advisor.customersServed)}+</p>
                              <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                          </div>
                      </div>
                      <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                  </div>
              </div>
          </div>`
          });
      }
      console.log(htmlFirstFold)
      console.log(htmlLastFold)
      firstFoldParent.innerHTML = htmlFirstFold;
      lastFoldParent.innerHTML = data.advisors.length > 3 ? htmlLastFold : '';
      let agentCountText = `${data.totalEligibleAdvisorCount ? data.totalEligibleAdvisorCount : data.advisors.length} Insurance Advisors`
      $('.agent-count-js').text(agentCountText)
      let url = new URL(window.location);
      url.searchParams.set('pincode', window.tm_pincode_data.pincode);
      url.searchParams.set('vertical', window.tm_vertical_data);
      window.history.pushState(null, '', url.toString());
      $('.advisor-list-wraper').removeClass('d-none')
      $('#empty-screen-wrap').addClass('d-none')
      $('#pincodeForm .tm-button').removeClass('tm-loader')
      populateVertical()
      closePopup('pincodePopup')
      $('.tm-loading').removeClass('tm-loading')
  }
  
  function renderEmptyScreen () {
      $('.advisor-list-wraper').addClass('d-none')
      $('#empty-screen-wrap').removeClass('d-none')
      $('#pincodeForm .tm-button').removeClass('tm-loader')
      populateVertical()
      closePopup('pincodePopup')
      $('.tm-loading').removeClass('tm-loading')
  }
  function filterVertical(){
    $('.tm-preloader').addClass('tm-loading')
    getAdvisorList(window.tm_pincode_data, window.tm_vertical_data)
  }
  //render script end
