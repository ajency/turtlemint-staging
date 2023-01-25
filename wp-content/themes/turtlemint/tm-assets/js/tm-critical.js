//rendering script
const DATA = {
  "customerDetails": null,
  "totalEligibleAdvisorCount": 45,
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
      }
  ]
  }

const VERTICAL_JSON = {
    'TW': '2-Wheeler',
    'FW': '4-Wheeler',
    'Life': 'Life',
    'Health': 'Health'
}
//https://f57dcbf8-35f1-49ea-8ed8-3e8e74f6432a.mock.pstmn.io
const SERVER = 'https://87a98206-a697-427a-8c88-86b06e6d1a56.mock.pstmn.io';
const PINCODE_SERVER = 'https://857eb4d1-3ba3-4f66-b7fb-3bca810824a3.mock.pstmn.io'

  async function getPincodeLocation(pincode){
      try{
          let headersList = {
          "Content-Type": "application/json"
          }
          let response = await fetch(PINCODE_SERVER+"/api/agent-locator/pin-details/"+pincode, { 
              method: "GET",
              headers: headersList
          });
          let data = await response.json();
        //   console.log(data)
          if(data.area && data.city && data.city){
              
            //TODO
            //replace hardcoded object with data
              //window.tm_pincode_data = data
              window.tm_pincode_data = {id: 110018, pinCode: pincode, area: 'New Delhi', city: 'Delhi', state: 'Delhi'};
              
              $('#pincode-filter-input').text(pincode)
              return data;
          }
          else{
              throw 'Pincode not found';
          }
      }
      catch(err){
        //   $('#pincode-filter-input').text(pincode)
        //   window.window.tm_pincode_data= {
        //       "pinCode": pincode
        //   }
        console.log('Get Pincode Location error: ', err)
          return {
              'error': true,
              'info': 'Pincode not found',
              'data': err
          }
      }
  }
  
  async function getAdvisorList(pincode, vertical, offset=0, returnData=false) {
      try{
          let headersList = {
          "Content-Type": "application/json"
          }
          let bodyContent = JSON.stringify({
              "pinCode": pincode,
              "vertical": vertical
          });
          let response = await fetch(SERVER+"/api/agent-locator/advisors?offset="+offset+"&limit=9", { 
              method: "POST",
              body: bodyContent,
              headers: headersList
          });
          let data = await response.json();
        //   console.log(data)
          window.tm_total_advisor_count = DATA.totalEligibleAdvisorCount;//TODO replace DATA with data
          window.tm_added_advisor_count = window.tm_added_advisor_count ? window.tm_added_advisor_count + DATA.advisors.length : DATA.advisors.length;//TODO replace DATA with data
          if(returnData){ 
            return DATA;//TODO replace DATA with data
          }
          //TODO pass data instead of DATA
          data.advisors && data.advisors.length > 0 ? renderContent(DATA): renderEmptyScreen();
      }
      catch(err){
          console.log('Get Advisor List error:', err)
          if(returnData){ return {"error": true, "info": err } }
          renderEmptyScreen()
      }
  }
  
  function renderContent(data){
      let firstFoldParent = document.getElementById('firstFoldList')
      let lastFoldParent = document.getElementById('lastFoldList');
      let htmlFirstFold = ''
      let htmlLastFold = ''
    //   console.log(data.advisors.slice(3))
      data.advisors.slice(0, 3).forEach( advisor => {
          htmlFirstFold += `<div class="tm-advisor-wrap">
          <div class="advisor-card">
              <div class="advisor-card__wraper">
                  <div class="advisor-image">
                      ${ advisor.profilePicUrl ? '<img src="'+advisor.profilePicUrl+'" alt="'+VERTICAL_JSON[window.tm_vertical_data]+' Insurance advisor in '+advisor.city+'">' : '' }
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
                        ${ advisor.profilePicUrl ? '<img src="'+advisor.profilePicUrl+'" alt="'+VERTICAL_JSON[window.tm_vertical_data]+' Insurance advisor in '+advisor.city+'">' : '' }
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
    //   console.log(htmlFirstFold)
    //   console.log(htmlLastFold)
      firstFoldParent.innerHTML = htmlFirstFold;
      lastFoldParent.innerHTML = data.advisors.length > 3 ? htmlLastFold : '';
      let agentCountText = `${data.totalEligibleAdvisorCount ? data.totalEligibleAdvisorCount : data.advisors.length} ${VERTICAL_JSON[window.tm_vertical_data]} Insurance Advisors`
      $('.agent-count-js').text(agentCountText)
      let url = new URL(window.location);
      window.tm_pincode_data ? url.searchParams.set('pincode', window.tm_pincode_data.pinCode) : '';
      window.tm_vertical_data ? url.searchParams.set('vertical', window.tm_vertical_data) : '';
      window.tm_offset ? url.searchParams.set('offset', window.tm_offset): '';
      window.history.pushState(null, '', url.toString());
      $('.advisor-list-wraper').removeClass('d-none')
      $('#empty-screen-wrap').addClass('d-none')
      $('#pincodeForm .tm-button').removeClass('tm-loader')
      populateVertical()
      closePopup('pincodePopup')
      $('.tm-loading').removeClass('tm-loading')
      window.addEventListener("scroll", handleInfiniteScroll);
  }
  
  function renderEmptyScreen () {
      let url = new URL(window.location);
      window.tm_pincode_data ? url.searchParams.set('pincode', window.tm_pincode_data.pinCode) : '';
      window.tm_vertical_data ? url.searchParams.set('vertical', window.tm_vertical_data) : '';
      window.tm_offset ? url.searchParams.set('offset', window.tm_offset): '';
      window.history.pushState(null, '', url.toString());
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


  //infinite scrolling
  async function renderNextPage(){
    $('#paginationLoader').removeClass('d-none')
    window.tm_offset = window.tm_offset + 1;
    let data = await getAdvisorList(window.tm_pincode_data.pinCode,window.tm_vertical_data, window.tm_offset, true)
    // console.log(data)
    let lastFoldParent = document.getElementById('lastFoldList');
    let html = '';
    if(data.advisors && data.advisors.length > 0){
        data.advisors.forEach( advisor => {
          html += `<div class="tm-advisor-wrap">
              <div class="advisor-card">
                  <div class="advisor-card__wraper">
                      <div class="advisor-image">
                        ${ advisor.profilePicUrl ? '<img src="'+advisor.profilePicUrl+'" alt="'+VERTICAL_JSON[window.tm_vertical_data]+' Insurance advisor in '+advisor.city+'">' : '' }
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
    let url = new URL(window.location);
    window.tm_pincode_data ? url.searchParams.set('pincode', window.tm_pincode_data.pinCode) : '';
    window.tm_vertical_data ? url.searchParams.set('vertical', window.tm_vertical_data) : '';
    window.tm_offset ? url.searchParams.set('offset', window.tm_offset): '';
    window.history.pushState(null, '', url.toString());
    $('#paginationLoader').addClass('d-none')
    lastFoldParent.innerHTML += html;
    window.addEventListener("scroll", handleInfiniteScroll);
  }
  
  function handleInfiniteScroll() {
      const endOfPage = window.innerHeight + window.pageYOffset >= document.body.offsetHeight;
  
      if (endOfPage) {
        removeInfiniteScroll()
        renderNextPage()
        // console.log("page end: Run fetch")
      }
  
      if (window.tm_total_advisor_count <= window.tm_added_advisor_count) {
        removeInfiniteScroll();
      }
  };
  
  function removeInfiniteScroll() {
    // loader.remove();
    window.removeEventListener("scroll", handleInfiniteScroll);
  };
  //infinite scrolling end