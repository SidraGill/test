<template>
<b-container>

        <div class="md-stepper-horizontal">
            <div class="md-step active">
                <router-link to="personal">
                    <div class="md-step-title">Personal</div>
                </router-link>
            </div>
            <div class="md-step">
                <router-link to="income">
                    <div class="md-step-title">Income</div>
                </router-link>
            </div>
            <div class="md-step">
                <router-link to="deduction">
                    <div class="md-step-title">Deduction</div>
                </router-link>
            </div>
            <div class="md-step">
                <router-link to="wealth">
                    <div class="md-step-title">Wealth</div>
                </router-link>
            </div>
        </div>
<b-form @submit="formSubmit" >
<b-tabs pills v-model="tabIndex" align="center" content-class="mt-3">
  <div class="tex-center">
<b-tab title-item-class="mytab" active title="Basic Info" >
    <template v-slot:title>
                    <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_EmployeeBadge" overflow="hidden"><g><path d="M50 30 46 30C43.8 30 42 28.2 42 26L42 18C42 15.8 43.8 14 46 14L50 14C52.2 14 54 15.8 54 18L54 26C54 28.2 52.2 30 50 30Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/><path d="M80 50 56 50 56 46 80 46 80 50ZM80 62 56 62 56 58 80 58 80 62ZM80 74 56 74 56 70 80 70 80 74ZM48 74 16 74 16 66C16 64.8 16.6 63.6 17.6 62.8 19.8 61.2 22.6 59.8 25.4 59 27.6 58.4 29.8 58 32 58 34.4 58 36.6 58.4 38.6 59 41.4 59.8 44.2 61 46.4 62.8 47.4 63.6 48 64.8 48 66L48 74ZM32 40C36.4 40 40 43.6 40 48 40 52.4 36.4 56 32 56 27.6 56 24 52.4 24 48 24 43.6 27.6 40 32 40ZM84 26 58 26C58 30.4 54.4 34 50 34L46 34C41.6 34 38 30.4 38 26L12 26C9.8 26 8 27.8 8 30L8 78C8 80.2 9.8 82 12 82L84 82C86.2 82 88 80.2 88 78L88 30C88 27.8 86.2 26 84 26Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/></g></svg>

                     <p>YOUR INFO</p>
    </template>
    <b-form-group>
      <b-row>
          <b-col class="float-left">
            <label class="frmLbl"> First Name</label>
            <b-form-input class="flatform" v-model="person.fname" name="fname" placeholder="Enter your first name"></b-form-input>
          </b-col>
          <b-col class="float-right">
            <label class="lname frmLbl"> Last Name</label>
            <b-form-input class="flatform" v-model="person.lname" name="lname" placeholder="Enter your last name"></b-form-input>
          </b-col>
      </b-row>
      <b-row>
        <b-col class="float-left">
          <label class="dob frmLbl"> DOB</label>
          <b-form-input class="flatform" type="date" v-model="person.dob" name="dob"></b-form-input>
        </b-col>
        <b-col class="float-right">
          <label class="mobile frmLbl">Mobile</label>
          <b-form-input class="flatform" v-model="person.mobile" name="mobile" placeholder="Enter your mobile number"></b-form-input>
        </b-col>
      </b-row>
      <b-row>
        <b-col class="float-left">
          <label class="frmLbl" for="email">Email</label>
          <b-form-input class="flatform" v-model="person.email" name="email" placeholder="Enter your email"></b-form-input>
        </b-col>
        <b-col class="float-right">
          <label class="frmLbl" for="address 1">Address </label>
          <b-form-input class="flatform" v-model="person.address1" name="address1" placeholder="Enter address"></b-form-input>
        </b-col>
      </b-row>
      <b-row>
        <b-col class="float-left">
          <label class="frmLbl" for="City">City</label>
          <b-form-select class="flatform" :options="person.opt_city" v-model="person.city"></b-form-select>
        </b-col>
        <b-col class="float-right">
          <label class="frmLbl" for="Country">Country</label>
          <b-form-select class="flatform" v-model="person.country" :options="person.opt_country"></b-form-select>
        </b-col>
      </b-row><br>
      <b-row>
        <b-col align-self="end" class="text-right">
          <b-button variant="success" type="button" class="float-right" @click="tabIndex++">Next</b-button>
        </b-col>
      </b-row>
    </b-form-group>
    {{person}}
</b-tab>
<b-tab title="Citizenship" title-item-class="mytab" >
  <template v-slot:title>
    <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Flag" overflow="hidden"><path d="M23 8.1C21.3 8.1 20 9.4 20 11.1L20 88.1 26 88.1 26 11.1C26 9.4 24.7 8.1 23 8.1Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/><path d="M42.7 7.9C33.9 7.9 30 10.8 30 10.8L30 43.9C30 43.9 33.8 41 42.7 41 53.3 41 63.7 46.8 76 41.2L76 8.1C60.5 12.7 53.3 7.9 42.7 7.9Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/></svg>
    <p>CITIZENSHIP</p>
  </template>
  <b-row class="justify-content-center">
    <b-form-group>
      <h4>Are you a Pakistani Citizen?</h4>
      <b-row>
        <b-form-radio id="cross" class="input-hidden col-4 mt-4" v-model="person.pakistani" name="pakistani" value="0"></b-form-radio>
        <label for="cross" class=" frmLbl col-4 mt-4">
          <font-awesome-icon class="icon_cross" color="red" :icon="['fas', 'times-circle']"/>No
        </label>
        <div class="mb-5" style="height:80px; border: 1px solid;"></div>
        <div class="" style="width:50px;"></div>
        <b-form-radio id="good" class="input-hidden col-4 mt-4" v-model="person.pakistani" name="pakistani" value="1"></b-form-radio>
        <label for="good" class=" frmLbl col-4 mt-4">
          <font-awesome-icon class="icon_good" color="green" :icon="['fas', 'check-circle']"/> Yes
        </label>
      </b-row>
      <b-row v-show="person.pakistani === '0'">
        <b-col>
          <label class="frmLbl">Enter Passport</label>
           <b-form-input class="flatform" v-model="person.passport" name="passport"></b-form-input>
        </b-col>
      </b-row>
      <b-row v-show="person.pakistani === '1'">
        <b-col>
          <label class="frmLbl">Enter CNIC</label>
          <b-form-input class="flatform" v-model="person.cnic" name="cnic"></b-form-input>
        </b-col>
      </b-row><br>
      <b-row>
         <b-col align-self="start">
            <b-button @click.prevent="tabIndex--" class="float-left">Previous</b-button>
         </b-col>
         <b-col align-self="end" class="text-right">
           <b-button variant="success" v-show="person.passport || person.cnic" @click.prevent="tabIndex++">Next</b-button>
         </b-col>
      </b-row>
      {{person}}
    </b-form-group>
  </b-row>
</b-tab>
<b-tab title="Residential Status" title-item-class="mytab">
  <template v-slot:title>
    <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Flag" overflow="hidden"><path d="M23 8.1C21.3 8.1 20 9.4 20 11.1L20 88.1 26 88.1 26 11.1C26 9.4 24.7 8.1 23 8.1Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/><path d="M42.7 7.9C33.9 7.9 30 10.8 30 10.8L30 43.9C30 43.9 33.8 41 42.7 41 53.3 41 63.7 46.8 76 41.2L76 8.1C60.5 12.7 53.3 7.9 42.7 7.9Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none" fill-opacity="1"/></svg>
    <p>RESIDENTIAL STATUS</p>
  </template>
  <div v-show="personalT === 6" >
    <b-form-group>
      <b-row class="justify-content-center">
        <legend>During 1/6/18 to 30/6/19, is your stay in Pakistan more than 183 days?</legend>
        <b-form-radio id="day_cross" class="input-hidden col-4 mt-4" v-model="person.day183" name="day183" value="0"></b-form-radio>
        <label for="day_cross" class="col-2 mt-4 ml-1">
          <font-awesome-icon class="icon_cross" color="red" :icon="['fas', 'times-circle']"/>No
        </label>
        <div class="mb-5" style="height:80px; border: 1px solid;"></div>
        <b-form-radio id="day_good" class="input-hidden col-4 mt-4" v-model="person.day183" name="day183" value="1"></b-form-radio>
        <label for="day_good" class="col-4 mt-4 ml-5">
          <font-awesome-icon class="icon_good" color="green" :icon="['fas', 'check-circle']"/>Yes
        </label>
      </b-row>
      <b-row>
        <b-col align-self="start">
          <b-button type="button" class="float-left" @click="tabIndex--">Previous</b-button>
        </b-col>
        <b-col align-self="end" class="text-right">      
          <b-button variant="success" v-if="person.pakistani === '0' && person.day183 === '1'" @click="next(7)">Next</b-button>
          <b-button variant="success" v-else @click.prevent="next(9)">Next</b-button>
        </b-col>
      </b-row>
    </b-form-group>
  </div>
  <div class="justify-content-center" v-show="personalT===7" v-if=" person.pakistani === '0' && person.day183 === '1' "><!--  person.pakistani === '0' && -->
    <legend>Being a foreigner, Is your stay in Pakistan due to your employment?</legend>
      <b-form-group>
        <b-row class="justify-content-center">
          <b-form-radio id="emp_cross" class="input-hidden col-4 mt-4" v-model="person.dueToEmp" name="dueToEmp" value="0"></b-form-radio>
          <label for="emp_cross" class="col-2 mt-4 ml-1">
            <font-awesome-icon class="icon_cross" color="red" :icon="['fas', 'times-circle']"/>No
          </label>
          <div class="mb-5" style="height:80px; border: 1px solid;"></div>
          <b-form-radio id="emp_good" class="input-hidden col-4 mt-4" v-model="person.dueToEmp" name="dueToEmp" value="1"></b-form-radio>
          <label for="emp_good" class="col-4 mt-4 ml-5">
            <font-awesome-icon class="icon_good" color="green" :icon="['fas', 'check-circle']"/>Yes
          </label>
        </b-row>
        <b-row>
          <b-col align-self="start">
            <b-button @click.prevent="next(6)">Previous</b-button>
          </b-col>
          <b-col align-self="end" class="text-right">
            <b-button variant="success"           
                                v-if="person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '0'"            @click.prevent="next(8)">Next
            </b-button>
            <b-button variant="success" v-else @click.prevent="next(12)">Next</b-button>
          </b-col>
        </b-row> 
      </b-form-group>
  </div>    
  <div v-show="personalT === 12"  v-if="person.dueToEmp === '1'">
    <h4 class="justify-content-center" >If Yes, Over 3 Years?</h4>
    <b-form-group>
      <b-row class="justify-content-center">
        <div class="row  ml-4">
          <b-form-radio id="year_cross" class="input-hidden col-4 mt-4" v-model="person.over3yr" name="over3yr" value="0"></b-form-radio>
          <label for="year_cross" class="col-4 mt-4 ml-1 mr-3">
            <font-awesome-icon class="icon_cross" color="red" :icon="['fas', 'times-circle']"/>No
          </label>
          <div class="mb-5" style="height:80px; border: 1px solid;"></div>
          <b-form-radio id="year_good" class="input-hidden col-4 mt-4" v-model="person.over3yr" name="over3yr" value="1"></b-form-radio>
          <label for="year_good" class="col-5 mt-4 ml-3">
            <font-awesome-icon class="icon_good" color="green" :icon="['fas', 'check-circle']"/>Yes
          </label>
        </div>
      </b-row>
      <b-row>
        <b-col align-self="start">
          <b-button @click.prevent="next(7)">Previous</b-button>
        </b-col>
        <b-col align-self="end" class="text-right">
          <b-button variant="success"v-if=" person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '1' && person.over3yr === '1'" @click.prevent="next(8)">Next</b-button>
          <b-button variant="success" v-else @click.prevent="next(9)">Next</b-button>
        </b-col>
      </b-row>
    </b-form-group>
  </div>
  <div class="justify-content-center" v-show="personalT === 8" v-if="person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '0' || person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '1' && person.over3yr === '1'">
    <b-form-group>
      <p>Based on your responses, it appears that your worldwide income is taxable in Pakistan. However,
      your foreign sourced income will be taxed according to the tax treaty between Pakistan and the
      country from which the income has been earned.</p>
      <br>
      <p>Please contact our tax experts for a one to one consultation to better understand the tax
      implications of your foreign sourced income under tax treaty.</p>
      <br>
      <p>Click <strong>'Get CA assistance'</strong> to hire a dedicated Chartered Accountant for expert advice on your taxes in Pakistan and filing your Income Tax Return to FBR.</p>
      <b-row>
        <b-col align-self="start">
          <b-button type="button" class="float-left" @click="next(7)">Previous</b-button>
        </b-col>
        <b-col align-self="end" class="text-right">
          <b-button type="button" class="float-right" @click="tabIndex++">Next</b-button>
        </b-col>
      </b-row>
    </b-form-group>
  </div>
  <div v-show="personalT === 9" class="justify-content-center">
    <p v-if="person.day183 === '1' && person.pakistani === '1'">
    Based on your data your filling status is <b>RESIDENT PAKISTANI</b> which mean you're taxed on income sourced from Pakistan as well as rest of the
    world & You also do require to file a wealth statement.</p>
    <p v-if="person.day183 === '0' && person.pakistani === '1'">
    Based on your data your filling status is <b>NON-RESIDENT PAKISTANI</b> which mean you're only taxed on Pakistan source income & You do not require to file a wealth statement.</p>
    <p  v-if="(person.day183 === '0') && person.pakistani === '0' ">
    Based on your data your filling status is <b>NON-RESIDENT FOREIGNER</b> which mean you're only taxed on Pakistan source income & You do not require to file a wealth statement.</p>
    <p v-if="person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '1' && person.over3yr === '0' ">
    Based on your data your filling status is <b>NON-RESIDENT FOREIGNER</b> which mean you're only taxed on Pakistan source income & You do not require to file a wealth statement.</p>
      <b-row>
        <b-col align-self="start">
                 <b-button @click="next(8)">Previous</b-button>
        </b-col>
        <b-col align-self="end" class="text-right">
                  <b-button variant="success" @click="tabIndex++">Next</b-button>
        </b-col>
      </b-row>
  </div>

  {{person}}
</b-tab>

<b-tab title="Summary" title-item-class="mytab" >
    <template v-slot:title>
        <svg class="basic" viewBox="0 0 415.999 415.999" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" overflow="hidden"><g><g><rect x="240" y="240" width="64" height="16"/></g></g><g><g><rect x="240" y="288" width="64" height="16"/></g></g><g><g><circle  cx="208.24" cy="48" r="12"/></g></g><g><g><path fill="#ffc000" d="M367.998 96C367.998 78.327 353.672 64 335.999 64L291.575 64C285.649 57.417 278.037 52.38 269.291 49.864 261.924 47.745 256.254 42.075 254.135 34.708 248.371 14.664 229.897 0 207.999 0 186.101 0 167.629 14.663 161.865 34.707 159.743 42.083 154.059 47.746 146.684 49.871 137.946 52.389 130.342 57.421 124.422 64L80 64C62.326 64 48 78.327 48 96L48 383.999C48 401.672 62.326 415.999 80 415.999 153.466 415.999 243.758 415.999 336 415.999 353.674 415.999 368 401.672 368 383.999 368 293.12 367.999 206.097 367.998 96ZM128 95.742C128.11 81.676 137.614 69.136 151.112 65.246 163.822 61.583 173.59 51.82 177.24 39.129 181.157 25.512 193.805 16 207.999 16 222.193 16 234.841 25.512 238.757 39.131 242.409 51.829 252.17 61.59 264.868 65.241 278.486 69.157 287.998 81.806 287.998 95.999L287.998 111.999 128 111.999 128 95.742ZM336 399.999C250.545 399.999 165.23 399.999 80 399.999 71.177 399.999 64 392.821 64 383.999L64 96C64 87.178 71.177 80 80 80L114.742 80C113.012 84.892 112.046 90.143 112.003 95.617L112.003 128 304 128 304 96C304 90.385 303.008 85.009 301.236 80L336 80C344.822 80 351.999 87.178 351.999 96 351.999 141.743 351.998 356.254 352.001 383.999 352 392.822 344.823 399.999 336 399.999Z"/></g></g><g><g><path fill="#ffc000" d="M239.818 175.088 171.952 242.953 154.811 225.811 143.481 237.142 171.935 265.597 191.999 245.534 191.999 287.999 127.999 287.999 127.999 208 175.999 208 191.999 192 111.999 192 111.998 304 207.999 304 207.999 229.534 251.132 186.402Z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
       <p>SUMMARY</p>
  </template>
  <template>
    <div>
      <b-table responsive :items="items"> 
        <template v-slot:head(Your_Info)="scope">
        Your Info <a class="float-right" @click="tab_next(0)"><i class="fa fa-edit" style="font-size:15px"></i></a>
        </template>

        <template v-slot:cell(Your_Info)="data">
          <label>{{person.fname}} {{person.lname}}</label><br>
          <label>{{person.email}}</label><br>
          <label>{{person.dob}}</label><br>
          <label>{{person.mobile}}</label><br>
          <label>{{person.address}}</label>
       </template>
      </b-table>
    </div>
  </template>
  <template>
    <div>
      <b-table responsive :items="items"> 
         <template v-slot:head(Your_Info)="scope">
            <label style="width: 100%" v-if="person.pakistani === '1'">Pakistani <a class="float-right" @click="tab_next(1)"><i class="fa fa-edit" style="font-size:15px"></i></a>
            </label>
            <label style="width: 100%" v-if="person.pakistani === '0'">Foreigner <a class="float-right" @click="tab_next(1)"><i class="fa fa-edit" style="font-size:15px"></i></a>
            </label>
         </template>    
         <template v-slot:cell(Your_Info)="data">
            <label v-if="person.pakistani === '1'">{{person.cnic}}</label>
            <label v-if="person.pakistani === '0'">{{person.passport}}</label>
         </template>
      </b-table>
    </div>
  </template>
  <template>
  <div>
    <b-table responsive :items="items"> 
      <template v-slot:head(Your_Info)="scope">
        <label style="width: 100%">Filling Status <a class="float-right" @click="tab_next(2)"><i class="fa fa-edit" style="font-size:15px"></i></a>
        </label>
      </template>    
      <template v-slot:cell(Your_Info)="data">
        <label  v-if="person.pakistani === '0' && person.day183 === '0' ||person.pakistani === '0' && person.day183 === '1'">Non-Residential</label>
        <label v-if="person.pakistani === '1' && person.day183 === '1'">Residential</label>
      </template>
    </b-table>
  </div>
  </template>

  <b-row>
    <b-col align-self="start" >
        <b-button @click="tabIndex--">Previous</b-button>
    </b-col>
    <b-col align-self="end" class="text-right">
        <b-button variant="success">
          <router-link to="income">
            <div class="btnlnk">Next</div>
          </router-link>
        </b-button>
     </b-col>
  </b-row>
</b-tab>
</div>
</b-tabs>
            <div >
              <div class="col-5 float-right mt-4 mb-4"v-if="tabIndex === 1 && person.pakistani === '1' && (person.day183 === '0' || person.day183 === '1')">
                  <b-button class="float-right" variant="success" type="submit">Continue</b-button>
              </div>
              <div class="col-5 float-right mt-4 mb-4"v-if="tabIndex === 1 && (person.pakistani === '0') && person.day183 === '0'">
                  <b-button class="float-right" variant="success" type="submit">Continue</b-button>
                 </div>


                 <div class="col-5 float-right mt-4 mb-4"
                      v-if="tabIndex === 1 && (person.pakistani === '0') && person.day183 === '1' && person.dueToEmp === '1'  && person.over3yr === '0'"
                 >
                     <b-button class="float-right" variant="success" type="submit">Continue</b-button>
                 </div>
             </div>

             <div >

            <div class="col-5 float-right mt-4 mb-4"v-if="tabIndex === 1 && person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '0'">
              <a href="#" class="btn btn-warning float-right" type="button">Get CA assistance</a></div>

                 <div  class="col-5 float-right mt-4 mb-4" v-if="person.pakistani === '0' && person.day183 === '1' && person.dueToEmp === '1' && person.over3yr === '1'" >
                     <a href="#" class="btn btn-warning float-right"  type="button">Get CA assistance</a>
                 </div>
    </div>
    </b-form>
  </b-container>
</template>

<script>

    // import { GoodWizard } from 'vue-good-wizard';

    export default {
        name: "Personal",
        // components: {
        //     'vue-good-wizard': GoodWizard,
        // },
        data() {
            return {
                // steps: [
                //     // {
                //     //     label: 'Intro Yourself',
                //     //     slot: 'page1',
                //     // },
                //     // {
                //     //     label: 'Add Constraints',
                //     //     slot: 'page2',
                //     // },
                //     // {
                //     //     label: 'Review',
                //     //     slot: 'page3',
                //     // },
                //     // {
                //     //     label: 'finalStepLabel',
                //     //     slot: 'page4',
                //     //     // options: {
                //     //     //     nextDisabled: true, // control whether next is disabled or not
                //     //     // },
                //     // }
                // ],
        fields: [{key:'info', label:'Your Info'}],
        items: [
          {
            Your_Info:'fname',
          }
        ],

                tabIndex: 0,
                personalT: 6,
                person: {
                    fileReturn: null,
                    fileUpload: null,
                    document: null,
                    fname: null,
                    lname: null,
                    dob: null,
                    pakistani: null,
                    passport: null,
                    cnic: null,
                    mobile: null,
                    country: 'pakistan',
                    city: 'lhr',
                    day183: null,
                    dueToEmp: null,
                    over3yr: null,
                    opt_country: [
                        {value: null, text: 'Please select Country'},
                        {value: 'pakistan', text: 'Pakistan'},
                        {value: 'usa', text: 'USA'},
                        {value: 'uk', text: 'UK'},
                        {value: 'canada', text: 'Canada'}
                    ],
                    opt_city: [
                        {value: null, text: 'Please select City'},
                        {value: 'fsd', text: 'Faisalabad'},
                        {value: 'lhr', text: 'Lahore'},
                        {value: 'isb', text: 'Islamabad'},
                        {value: 'mlt', text: 'Multan'}
                    ]
                },
            }
        },

        methods: {

            next(addition) {
                this.personalT = addition ;
                console.log(addition)
            },
          tab_next(addition) {
                this.tabIndex = addition ;
                console.log(addition)
            },
            previewDocument() {
                this.files = this.$refs.myFiles.files
            },

            nextClicked(currentPage) {
                console.log('next clicked', currentPage);
                   return true; //return false if you want to prevent moving to next page
            },
            backClicked(currentPage) {
                console.log('back clicked', currentPage);
                return true; //return false if you want to prevent moving to previous page
            },

            formSubmit(e) {
                let self = this;

                e.preventDefault();
                // let currentObj = this;
                axios.post('/api/personalInfo', {
                    file_return: this.person.fileReturn,
                    file_upload: this.person.fileUpload,
                    first_name: this.person.fname,
                    last_name: this.person.lname,
                    dob: this.person.dob,
                    is_pakistani: this.person.pakistani,
                    passport: this.person.passport,
                    cnic: this.person.cnic,
                    mobile: this.person.mobile,
                    city: this.person.city,
                    country: this.person.country,
                    stay_183days: this.person.day183,
                    stay_bcz_of_emp: this.person.dueToEmp,
                    over_3years: this.person.over3yr,
                })
                    .then(function (response) {
                        alert('Data Saved Successfully');
                        self.$router.push('/income');
                    })
                    .catch(function (error) {
                        alert(error);
                    });
            }
        }
    }


</script>

<style lang="css">

    html {
        -webkit-font-smoothing: antialiased!important;
        -moz-osx-font-smoothing: grayscale!important;
        -ms-font-smoothing: antialiased!important;
    }
    body {
        font-family: 'Open Sans', sans-serif;
        font-size:16px;
        color:#555555;
    }
    .md-stepper-horizontal {
        display:table;
        width:85%;
        background-color:#E8E8E8;
        margin:0 7.5% 0 7.5%;
        padding-top:0px;
 
    }
    .md-stepper-horizontal .md-step {
        display:table-cell;
        position:relative;
        padding: 2px 6px 10px 6px;
        font:700 1.2rem/1 Roboto,sans-serif;
    }

    .md-step a{
        text-decoration: none;
    }
    .md-stepper-horizontal .md-step:hover,
    .md-stepper-horizontal .md-step:active {
        background-color:rgba(0,0,0,0.04);
    }
    .md-stepper-horizontal .md-step:active {
       /* border-radius: 15% / 75%;*/
    }
    .md-stepper-horizontal .md-step:first-child:active {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .md-stepper-horizontal .md-step:last-child:active {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .md-stepper-horizontal .md-step:hover{
        background-color:#DCDCDC;
    }
    .md-stepper-horizontal .md-step:first-child .md-step-bar-left,
    .md-stepper-horizontal .md-step:last-child .md-step-bar-right {
        display:none;
    }
    .md-stepper-horizontal .md-step .md-step-circle {
        width:30px;
        height:30px;
        margin:0 auto;
        background-color:#999999;
        border-radius: 50%;
        text-align: center;
        line-height:30px;
        font-size: 16px;
        font-weight: 600;
        color:#202020;
    }
    .md-stepper-horizontal.green .md-step.active {
        background-color:#00AE4D;
    }
    .md-stepper-horizontal.orange .md-step.active {
        background-color:#F96302;
    }
    .md-stepper-horizontal .md-step.active {
        background-color:white;
    }
    .md-stepper-horizontal .md-step.done .md-step-circle:before {
        font-family:'FontAwesome';
        font-weight:100;
        content: "\f00c";
    }
    .md-stepper-horizontal .md-step.done .md-step-circle *,
    .md-stepper-horizontal .md-step.editable .md-step-circle * {
        display:none;
    }
    .md-stepper-horizontal .md-step.editable .md-step-circle {
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
    }
    .md-stepper-horizontal .md-step.editable .md-step-circle:before {
        font-family:'FontAwesome';
        font-weight:100;
        content: "\f040";
    }
    .md-stepper-horizontal .md-step .md-step-title {
        margin-top:7px;
        font-size:12px;
        font-weight:600;
        text-transform:uppercase;
    }
    .md-stepper-horizontal .md-step .md-step-title,
    .md-stepper-horizontal .md-step .md-step-optional {
        text-align: center;
        color: rgba(0, 0, 0, 0.61);
    }
    .md-stepper-horizontal .md-step.active .md-step-title {
        font-weight: 600;
        color: rgba(0, 0, 0, 0.61);;
    }
    .md-stepper-horizontal .md-step.active.done .md-step-title,
    .md-stepper-horizontal .md-step.active.editable .md-step-title {
        font-weight:600;
    }
    .md-stepper-horizontal .md-step .md-step-optional {
        font-size:12px;
    }
    .md-stepper-horizontal .md-step.active .md-step-optional {
        color:rgba(0,0,0,.54);
    }
    .md-stepper-horizontal .md-step .md-step-bar-left,
    .md-stepper-horizontal .md-step .md-step-bar-right {
        position:absolute;
        /*top:36px;*/
        bottom: 49px;
        height:1px;
        border-top:1px solid #DDDDDD;
    }
    .md-stepper-horizontal .md-step .md-step-bar-right {
        right:0;
        left:50%;
        margin-left:20px;
    }
    .md-stepper-horizontal .md-step .md-step-bar-left {
        left:0;
        right:50%;
        margin-right:20px;
    }


    .input-hidden {
        position: absolute;
        left: -9999px;
    }

input[type=radio]:checked + label >.icon_cross /*,.btnRadio:checked + label >.icon_cross*/{
        border: 1px solid #fff;
        border-radius:10px;
        box-shadow: 0 0 3px 3px red;
        /*background:red;*/
    }
input[type=radio]:checked + label >.icon_good/*,.btnRadio:checked + label >.icon_good*/{

        border: 1px solid #fff;
        border-radius:10px;
        box-shadow: 0 0 3px 3px #090;
        /*background:red;*/
    }

    input[type=radio]+ label,/* .btnRadio:checked + label*/{
      font-size: 12px;
      font-weight: bold;
    }

  .nav-pills {
       border-bottom: 1px solid #ced4da;
        width:85%;
        margin:0 7.5% 0 7.5%;
  }


  .nav-pills .mytab .nav-link:not(.active) {

  color:grey ;
  }
.mt-3{
  margin: 0 7% 0 7%;
}
  
 .nav-pills{
  display: table;
 }

  .mytab {
    display:table-cell;
    position:relative;
    /*width: 20%;*/
  }
  
  .nav-pills .mytab .nav-link ,.nav-pills .mytab:hover .nav-link {
    background-color: white !important;
    color:black ;
    text-align:center;
    padding: 10px 16px 6px 16px;
    font:700 .7rem/1 Roboto,sans-serif;
    line-height: 1.7;
    text-transform: uppercase;

  }

  .nav-pills .mytab .nav-link:not(.active) {
font-weight: 400;
  }

  .tab-content > .tab-pane {
    border: 1px solid;

  }
svg{
    height:40px;
    width:40px;
    fill:grey;
}


  .nav-pills .mytab .nav-link:not(.active) .basic path{
    fill:grey;
    stroke: white;

}
  .nav-pills .mytab:hover .nav-link:not(.active) .basic path{
    fill:#ffc000;
    stroke: white;

}
  .nav-pills .mytab .nav-link:not(.active) .basic_info path,.nav-pills .mytab .nav-link:not(.active) .basic_info circle{
    stroke:#000000 !important;
    fill:white;
  }

  .nav-pills .mytab:hover .nav-link:not(.active) .basic_info path ,.nav-pills .mytab:hover .nav-link:not(.active) .basic_info circle{
    stroke:#ffc000 !important;
    fill:white;
  }


.formset{
  padding: 0 60px 0 60px;
}
.flatform, .flatform:focus{
   outline: 0;
   border-width: 0 0 1px;
   border-color:  #A9A9A9; 
   border-radius: 0;
   font-size: 12px;
   font-weight: bold;
   box-shadow: none;
}

.frmLbl{
 font-size: 14px; 
 font-weight: bold; 
 color: #404040;
}
.btnlnk,.btnlnk:hover, .btnlnk:active {
  color: white;
  text-decoration: none;
}
*:focus {
    outline: none; /*-webkit-focus-ring-color auto 1px;*/
}
</style>
