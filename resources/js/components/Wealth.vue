<template>

  <b-container>
        <div class="md-stepper-horizontal">
            <div class="md-step">
                <router-link to="personal">
                    <div class="md-step-title">Personal</div>
                </router-link>
            </div>
            <!--                            <div class="md-step active editable">-->
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
            <div class="md-step active">
                <router-link to="wealth">
                    <div class="md-step-title">Wealth</div>
                </router-link>
            </div>
        </div>

<b-form @submit="formsubmit">
    <b-tabs pills v-model="tabIndex" align="center" content-class="mt-3">

        <div class="tex-center">
        <b-tab title-item-class="mytab" title="Op. Wealth" >
            <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Medical" overflow="hidden"><path d="M48 16C30.3 16 16 30.3 16 48 16 65.7 30.3 80 48 80 65.7 80 80 65.7 80 48 80 30.3 65.7 16 48 16ZM48 86C27 86 10 69 10 48 10 27 27 10 48 10 69 10 86 27 86 48 86 69 69 86 48 86Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M68 40 56 40 56 28C56 25.8 54.2 24 52 24L44 24C41.8 24 40 25.8 40 28L40 40 28 40C25.8 40 24 41.8 24 44L24 52C24 54.2 25.8 56 28 56L40 56 40 68C40 70.2 41.8 72 44 72L52 72C54.2 72 56 70.2 56 68L56 56 68 56C70.2 56 72 54.2 72 52L72 44C72 41.8 70.2 40 68 40Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Op. Wealth</p>
                  </template>

                <legend>What was your total wealth (net assets) at the beginning of the tax year - July 1, 2018?</legend>
                <b-form-group>
                    <b-row>
                        <label for="">Amount</label>
                        <b-form-input v-model="wealth.we_703002" name="we_703002"></b-form-input>
                    </b-row>
                </b-form-group>
                <b-row>
                    <b-col align-self="start">
                    <b-button type="button" class="float-left" >
                        <router-link to="deduction">
                        <div class="btnlnk">Previous</div>
                        </router-link>
                   </b-button>
                  </b-col>
                    <b-col align-self="end" class="text-right">
                        <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                    </b-col>
                </b-row>
                {{wealth}}
</b-tab>

<b-tab title-item-class="mytab"title="Bank" >
                <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Bank" overflow="hidden"><path d="M79 75 79 73 75 73 75 39 79 39 79 37 82 37 82 31 79 31 48 12 17 31 14 31 14 37 17 37 17 39 21 39 21 73 17 73 17 75 10 80 10 84 48 84 86 84 86 80 79 75ZM33 73 27 73 27 39 33 39 33 73ZM45 73 39 73 39 39 45 39 45 73ZM47 29C44.8 29 43 27.2 43 25 43 22.8 44.8 21 47 21 49.2 21 51 22.8 51 25 51 27.2 49.2 29 47 29ZM57 73 51 73 51 39 57 39 57 73ZM69 73 63 73 63 39 69 39 69 73Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Bank</p>
                  </template>

            <div v-show="bankT===1" class="row justify-content-center">

                <legend>Do you have a Bank Account?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="wealth.we_7006_001" name="we_7006_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7006_001" name="we_7006_001" value="1">Yes</b-form-radio>
                    </b-row>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7006_001 === '1'" variant="success" @click.prevent="bnk_next(2);newBankAccount();">Next</b-button>
                            <b-button v-show="wealth.we_7006_001 === '0'" variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
 
                </b-form-group>
            </div>

  <div v-show="bankT===2">
    <b-tabs content-class="tabs mt-3"  >
     <div  v-for="(account, index) in accounts">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p>Account #{{index + 1}}</p>
        </template>

                <b-form-group>
 
                    <div v-show="wealth.we_7006_001=== '1'">
                            <b-row>
                                <b-col align-self="end">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteBankAccount(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                  <b-col class="float-left">
                    <label class="frmLbl">Account Type</label>
                             <b-form-select class="flatform" v-model="selectedAccountType" @change="selectAccount" placeholder="Select Account Type">
                                 <option disabled>Select Account Type</option>
                                 <option v-for="(drink,index) in account_type" :value="index">{{ drink.label }}</option>
                            </b-form-select>
                </b-col>
                <b-col class="float-right ">

                            <label class="frmLbl" for="selectoption">Account Form</label>
                            <b-form-select class="flatform" v-model="account.selectedOption" v-if="options.length" name="selectoption" placeholder="Select Account Form">
                                <option disabled>Select Account Form</option>
                                <option v-for="option in options" >{{ option }}</option>
                            </b-form-select>

                            <div style="display: none;">

                                <select class="flatform" v-model="account.selectedAccountTypeLabel" >
                                    <option disabled>Select Account Form</option>
                                     <option v-for="option in options" >{{ option }}</option>
                                </select>

                             </div>
                            <p v-if="selectedOption">
                                <b-form-input class="flatform"  v-model="account.selectedAccountTypeLabel" name="we_7006_02"></b-form-input>
                                You selected a {{ selectedAccountTypeLabel }} and specifically {{ account.selectedOption }}.
                            </p>

                            <label class="frmLbl">ACCOUNT NO.</label>
                            <b-form-input class="flatform" v-model="account.we_7006_003" name="we_7006_003"></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">
                            <label class="frmLbl">IBAN</label>
                            <b-form-input class="flatform" v-model="account.we_7006_004" name="we_7006_004"></b-form-input>
                    </b-col>
                    <b-col class="float-right">
                            <label class="frmLbl">CURRENCY</label>
                            <b-form-select class="flatform" v-model="account.we_7006_005" :options="wealth.opt_we_7006_005" name=""></b-form-select>
                    </b-col>
                  </b-row>
                  <b-row>
              <b-col class="float-left">
                    <label class="frmLbl">BANK NAME</label>
                    <b-form-input class="flatform" v-model="account.we_7006_006" name="we_7006_006"></b-form-input>
              </b-col>
              <b-col class="float-right">
                            <label class="frmLbl">BRANCH NAME</label>
                            <b-form-input class="flatform" v-model="account.we_7006_007" name="we_7006_007"></b-form-input>
              </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">          
                            <label class="frmLbl">BALANCE AS OF JUNE 30</label>
                            <b-form-input class="flatform" v-model="account.we_7006_008" name="we_7006_008"></b-form-input>
                    </b-col>
                  <b-col class="float-right">       
                            <label class="frmLbl">FOREIGN REMITTANCE AMOUNT</label>
                            <b-form-input class="flatform" v-model="account.we_7006_009" name="we_7006_009"></b-form-input>
                  </b-col>
                  </b-row>

                  <b-row>
                  <b-col class="float-left">
                            <label class="frmLbl">INTEREST EARNED</label>
                            <b-form-input class="flatform" v-model="account.we_7006_010" name="we_7006_010"></b-form-input>
                    </b-col>
                    <b-col class="float-right">                    
                            <label class="frmLbl">TAX DEDUCTED ON INTEREST</label>
                            <b-form-input class="flatform" v-model="account.we_7006_011" name="we_7006_011"></b-form-input>
                  </b-col>
                  </b-row>
                  <b-row>
                  <b-col class="float-left">
                            <label class="frmLbl">TAX DEDUCTED ON Cash Withdrawal from Bank u/s 231A</label>
                            <b-form-input class="flatform" v-model="account.we_7006_012" name="we_7006_012"></b-form-input>
                    </b-col>
                    <b-col class="float-right">
                            <label class="frmLbl">TAX DEDUCTED ON Certain Banking Transactions u/s 231AA</label>
                            <b-form-input class="flatform" v-model="account.we_7006_013" name="we_7006_013"></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">
                            <label class="frmLbl">Banking transactions otherwise than through cash u/s 236P</label>
                            <b-form-input class="flatform" v-model="account.we_7006_014" name="we_7006_014"></b-form-input>
                   </b-col>
                    <b-col class="float-right">
                            <label class="frmLbl">Education related expenses remitted abroad u/s 236R</label>
                            <b-form-input class="flatform" v-model="account.we_7006_015" name="we_7006_015"></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">
                            <label class="frmLbl">Amount Remitted Abroad Through Credit/Debit/Prepaid cards</label>
                            <b-form-input class="flatform" v-model="account.we_7006_016" name=""></b-form-input>
                    </b-col>
                    <b-col class="float-right">
                    </b-col>
                 </b-row>
                </div>
                </b-form-group>
     </b-tab>
      </div>
        <b-card-footer>
                    <div v-show="wealth.we_7006_001=== '1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="bnk_next(1)">Previous</b-button>
                        </b-col>
                                <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="newBankAccount()">+add another account</b-link>
                              </b-col>

                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>

                    </div>
        </b-card-footer>
    </b-tabs>

  </div>
{{accounts}}


{{wealth}}
</b-tab>
<!--             <div class="formset col-12">
                <b-tab title-item-class="mytab" title="Certificate" >
                  <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Medical" overflow="hidden"><path d="M48 16C30.3 16 16 30.3 16 48 16 65.7 30.3 80 48 80 65.7 80 80 65.7 80 48 80 30.3 65.7 16 48 16ZM48 86C27 86 10 69 10 48 10 27 27 10 48 10 69 10 86 27 86 48 86 69 69 86 48 86Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M68 40 56 40 56 28C56 25.8 54.2 24 52 24L44 24C41.8 24 40 25.8 40 28L40 40 28 40C25.8 40 24 41.8 24 44L24 52C24 54.2 25.8 56 28 56L40 56 40 68C40 70.2 41.8 72 44 72L52 72C54.2 72 56 70.2 56 68L56 56 68 56C70.2 56 72 54.2 72 52L72 44C72 41.8 70.2 40 68 40Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Certificate</p>
                  </template>

            <div>
                <legend>DO YOU HAVE ANY BANK DEPOSIT or CERTIFICATES?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="wealth.we_7006_100" name="we_7006_100" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7006_100" name="we_7006_100" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="wealth.we_7006_100 === '1'">
                        <div v-for="(certificate, index) in certificates">
                            <b-row>
                                <b-col align-self="start">Certificate #{{index + 1}}</b-col>
                                <b-col align-self="end" class="text-right">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteCertificate(index)">Delete</b-link>
                                </b-col>
                            </b-row>

                            <label for="">Type</label>
                            <b-form-input v-model="certificate.we_7006_101" name="we_7006_101"></b-form-input>

                            <label for="">Form</label>
                            <b-form-input v-model="certificate.we_7006_102" name="we_7006_102"></b-form-input>

                            <label for="">Ref no</label>
                            <b-form-input v-model="certificate.we_7006_103" name="we_7006_103"></b-form-input>

                            <label for="">Currency</label>
                            <b-form-select v-model="certificate.we_7006_104" :options="wealth.opt_we_7006_104" name=""></b-form-select>

                            <label for="">Institute name</label>
                            <b-form-input v-model="certificate.we_7006_105" name="we_7006_105"></b-form-input>

                            <label for="">BALANCE AS OF JUNE 30</label>
                            <b-form-input v-model="certificate.we_7006_106" name="we_7006_106"></b-form-input>

                            <label for="">INTEREST EARNED</label>
                            <b-form-input v-model="certificate.we_7006_107" name="we_7006_107"></b-form-input>

                            <label for="">TAX DEDUCTED ON INTEREST</label>
                            <b-form-input v-model="certificate.we_7006_108" name="we_7006_108"></b-form-input>
                        </div>
                        <b-row>
                            <b-col align-self="start">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="newCertificate()">+add another certificate</b-link>
                            </b-col>
                            <b-col align-self="end" class="text-right"></b-col>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>


                </b-form-group>
            </div>

</b-tab>
</div> -->
                <b-tab title-item-class="mytab" title="Vehicle" >
                  <template v-slot:title>

<svg class="basic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 60 60" version="1.1"><!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch --><title>034 - Life Insurance</title><desc>Created with Sketch.</desc><defs/><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="034---Life-Insurance" fill="#000000" fill-rule="nonzero"><path fill="#FFC000" d="M12.542,48.64 C12.1949095,49.0078818 12.0010872,49.4942257 12,50 L12,58 C12,59.1045695 12.8954305,60 14,60 L25,60 C26.1045695,60 27,59.1045695 27,58 L27,50 C27,48.8954305 26.1045695,48 25,48 L25,46.139 C25.0306399,43.7706727 24.2579711,41.4618312 22.808,39.589 C21.9578989,38.470916 20.7993346,37.6258906 19.475,37.158 C17.3688382,36.273094 15.4318729,35.0300529 13.75,33.484 C12.1888463,32.1982345 9.97101938,32.0829806 8.285,33.2 L6.122,28.146 C5.66202057,27.1040349 4.68110027,26.3866155 3.54874229,26.2639868 C2.4163843,26.1413582 1.30462076,26.6321504 0.632242236,27.5514868 C-0.0401362855,28.4708233 -0.170979487,29.6790349 0.289,30.721 L4.208,39.342 C4.7367119,40.509062 5.47222588,41.5708311 6.379,42.476 L12.542,48.64 Z M25,58 L14,58 L14,50 L25,50 L25,58 Z M2.109,29.894 C1.94175327,29.5260467 1.97287988,29.0983304 2.19163714,28.7584681 C2.41039441,28.4186059 2.78682049,28.2131465 3.191,28.213 C3.66664654,28.2126156 4.09651136,28.4964366 4.283,28.934 L6.52,34.151 C7.11402167,35.5429028 7.97024427,36.8075456 9.042,37.876 L13.61,42.445 C13.8610745,42.7049566 14.2328779,42.8092126 14.5825073,42.7176972 C14.9321368,42.6261817 15.2051817,42.3531368 15.2966972,42.0035073 C15.3882126,41.6538779 15.2839566,41.2820745 15.024,41.031 L10.456,36.462 C9.99666328,36.0037722 9.5836624,35.5013381 9.223,34.962 C10.1833362,34.2230209 11.5268309,34.2454194 12.462,35.016 C14.3313425,36.731555 16.4918904,38.0996763 18.842,39.056 C19.7996453,39.4044679 20.6352544,40.0239652 21.247,40.839 C22.412398,42.3573757 23.0301832,44.2251802 23,46.139 L23,48 L14.731,48 L7.793,41.062 C7.05613326,40.3261769 6.45820511,39.463331 6.028,38.515 L2.109,29.894 Z" id="Shape"/><path fill="#FFC000"  d="M22,53 L21,53 C20.4477153,53 20,53.4477153 20,54 C20,54.5522847 20.4477153,55 21,55 L22,55 C22.5522847,55 23,54.5522847 23,54 C23,53.4477153 22.5522847,53 22,53 Z" id="Shape"/><path fill="#FFC000"  d="M56.809,26.213 C55.5332832,26.2121763 54.3802315,26.9728755 53.879,28.146 L51.721,33.181 C50.0291245,32.0694769 47.8101972,32.1911509 46.25,33.481 C44.5681271,35.0270529 42.6311618,36.270094 40.525,37.155 C39.2006654,37.6228906 38.0421011,38.467916 37.192,39.586 C35.741385,41.4596396 34.9686796,43.7696481 35,46.139 L35,48 C33.8954305,48 33,48.8954305 33,50 L33,58 C33,59.1045695 33.8954305,60 35,60 L46,60 C47.1045695,60 48,59.1045695 48,58 L48,50 C47.9989128,49.4942257 47.8050905,49.0078818 47.458,48.64 L53.621,42.476 C54.5277741,41.5708311 55.2632881,40.509062 55.792,39.342 L59.711,30.721 C60.1602923,29.7345526 60.0774013,28.5873735 59.4909624,27.6757642 C58.9045234,26.764155 57.8949474,26.213113 56.811,26.213 L56.809,26.213 Z M46,58 L35,58 L35,50 L46,50 L46,58 Z M57.891,29.894 L53.972,38.515 C53.5417949,39.463331 52.9438667,40.3261769 52.207,41.062 L45.269,48 L37,48 L37,46.139 C36.9698168,44.2251802 37.587602,42.3573757 38.753,40.839 C39.3635264,40.0248642 40.1972635,39.4054671 41.153,39.056 C43.5035524,38.0999535 45.6644757,36.731809 47.534,35.016 C48.4681478,34.2395601 49.8154192,34.2134035 50.779,34.953 C50.4172837,35.4963142 50.0022252,36.0021563 49.54,36.463 L44.972,41.032 C44.5930278,41.4243789 44.5984476,42.0480848 44.9841814,42.4338186 C45.3699152,42.8195524 45.9936211,42.8249722 46.386,42.446 L50.954,37.877 C52.0257557,36.8085456 52.8819783,35.5439028 53.476,34.152 L55.713,28.934 C55.9000073,28.4970055 56.3296729,28.2137095 56.805,28.214 C57.2091795,28.2141465 57.5856056,28.4196059 57.8043629,28.7594681 C58.0231201,29.0993304 58.0542467,29.5270467 57.887,29.895 L57.891,29.894 Z" id="Shape"/><path fill="#FFC000"  d="M39,53 L38,53 C37.4477153,53 37,53.4477153 37,54 C37,54.5522847 37.4477153,55 38,55 L39,55 C39.5522847,55 40,54.5522847 40,54 C40,53.4477153 39.5522847,53 39,53 Z" id="Shape"/><path fill="#FFC000"  d="M41.074,-1.77635684e-15 C36.6844643,-0.026532566 32.5553068,2.07980755 30,5.649 C27.4446932,2.07980755 23.3155357,-0.026532566 18.926,-3.27727212e-15 C10.953,-1.77635684e-15 6,5.053 6,13.188 C5.97913755,15.1698643 6.31795586,17.1390763 7,19 L2,19 C1.44771525,19 1,19.4477153 1,20 C1,20.5522847 1.44771525,21 2,21 L7.916,21 C9.35962336,23.361265 11.1991833,25.4562254 13.354,27.193 C13.866,27.649 14.363,28.093 14.828,28.536 C18.228,31.777 28.918,40.412 29.372,40.778 C29.7384487,41.0737155 30.2615513,41.0737155 30.628,40.778 C31.082,40.412 41.773,31.778 45.172,28.536 C45.637,28.093 46.134,27.649 46.646,27.193 C48.8008167,25.4562254 50.6403766,23.361265 52.084,21 L58,21 C58.5522847,21 59,20.5522847 59,20 C59,19.4477153 58.5522847,19 58,19 L53.005,19 C53.6853407,17.1387605 54.0224634,15.1695578 54,13.188 C54,5.053 49.047,-1.77635684e-15 41.074,-1.77635684e-15 Z M8,13.188 C8,6.182 12.084,2 18.926,2 C23.1540817,1.98660719 27.0558181,4.27066259 29.114,7.964 C29.3035799,8.27134017 29.6388926,8.45847919 30,8.45847919 C30.3611074,8.45847919 30.6964201,8.27134017 30.886,7.964 C32.9441819,4.27066259 36.8459183,1.98660719 41.074,2 C47.916,2 52,6.182 52,13.188 C52.0300572,15.1861971 51.6328589,17.1677565 50.835,19 L45,19 C44.5942317,19.000161 44.2287862,19.2455034 44.075,19.621 L42.961,15.721 C42.8374441,15.2957093 42.4488688,15.0023451 42.006,15 L42,15 C41.5582318,14.9999693 41.1687875,15.2898167 41.042,15.713 L39.162,21.981 L36.978,11.791 C36.8808203,11.3360093 36.482691,11.0081464 36.0175088,11.0000272 C35.5523266,10.991908 35.1429983,11.3056777 35.03,11.757 L33.219,19 L28,19 C27.5942317,19.000161 27.2287862,19.2455034 27.075,19.621 L25.961,15.721 C25.8374441,15.2957093 25.4488688,15.0023451 25.006,15 C24.5557261,14.9772823 24.1521113,15.2758065 24.042,15.713 L22.162,21.981 L19.978,11.791 C19.880788,11.335816 19.4823821,11.0078876 19.017,11 C18.5491187,10.983253 18.135125,11.300774 18.03,11.757 L16.219,19 L9.165,19 C8.3671411,17.1677565 7.96994277,15.1861971 8,13.188 Z M45.314,25.7 C44.786,26.172 44.272,26.63 43.791,27.089 C40.918,29.83 32.39,36.775 30,38.713 C27.61,36.775 19.083,29.83 16.209,27.089 C15.728,26.63 15.214,26.172 14.686,25.7 C13.0198854,24.3280624 11.5361702,22.7485694 10.271,21 L17,21 C17.4586794,20.9999879 17.8585409,20.6879311 17.97,20.243 L18.925,16.423 L21.025,26.209 C21.1205557,26.6556493 21.5066067,26.9807883 21.963,26.999 C22.4183446,27.0129729 22.8272199,26.7218537 22.963,26.287 L24.982,19.558 L26.044,23.275 C26.1644865,23.6966239 26.5455998,23.9905677 26.984,24 C27.4180965,23.9958481 27.8043246,23.7234976 27.954,23.316 L28.721,21 L34,21 C34.4586794,20.9999879 34.8585409,20.6879311 34.97,20.243 L35.925,16.423 L38.025,26.209 C38.1205557,26.6556493 38.5066067,26.9807883 38.963,26.999 L39,26.999 C39.4417682,26.9990307 39.8312125,26.7091833 39.958,26.286 L41.977,19.557 L43.039,23.274 C43.1594865,23.6956239 43.5405998,23.9895677 43.979,23.999 C44.4118185,23.9909147 44.7960487,23.719973 44.949,23.315 L45.721,21 L49.729,21 C48.4638298,22.7485694 46.9801146,24.3280624 45.314,25.7 Z" id="Shape"/></g></g></svg>
                     <p>Vehicle</p>
                  </template>
<div v-show="vehT===1">
                    <legend>Do you own a vehicle registered in your name?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="wealth.we_7007_001" name="we_7007_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7007_001" name="we_7007_001" value="1">Yes</b-form-radio>
                    </b-row>
                </b-form-group>

                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7007_001 === '1'" variant="success" @click.prevent="veh_next(2); NewVehicles();">Next</b-button>
                            <b-button v-show="wealth.we_7007_001 === '0'" variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>

</div>

 <div v-show="vehT===2">

    <b-tabs content-class="tabs mt-3"  >
        <div v-for="(vehicle, index) in newvehicles">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p>Vehicle #{{index + 1}}</p>
        </template>
              <b-form-group>

                    <div v-show="wealth.we_7007_001==='1'">
                        <div>
                            <b-row>
                                <b-col align-self="end">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteVehicles(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">Type</label>
                        <b-form-input class="flatform" v-model="vehicle.we_7007_002" name="we_7007_002"></b-form-input>
                    </b-col>
                    <b-col class="float-right">
                        <label class="frmLbl" for="">Form</label>
                        <b-form-input class="flatform" v-model="vehicle.we_7007_003" name="we_7007_003"></b-form-input>
                    </b-col>
                  </b-row>

                  <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">REG NO.</label>
                        <b-form-input class="flatform" v-model="vehicle.we_7007_004" name="we_7007_004"></b-form-input>
                    </b-col>
                  <b-col class="float-right">    
                        <label class="frmLbl" for="">Purchase Price</label>
                        <b-form-input class="flatform" v-model="vehicle.we_7007_price"></b-form-input>
                  </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">WHEN PURCHASED?</label>
                        <b-form-input class="flatform" type="date" v-model="vehicle.we_7007_005" name="we_7007_005" @change="dateComparision(vehicle.we_7007_005)"></b-form-input>
                  </b-col>
                    <b-col class="float-right">
                    </b-col>
                  </b-row>

                        <div v-show="dateComparision(vehicle.we_7007_005)">
                            <label for="">TAX PAID?</label>
                            <b-form-input v-model="vehicle.we_7007_006" name="we_7007_006"></b-form-input>
                            <label for="">ADVANCE TAX PAID by purchaser?</label>
                            <b-row>
                              <b-col class="float-left">
                                <label for="">Receipt</label>
                                <b-form-input v-model="vehicle.we_7007_007" name="we_7007_007"></b-form-input>
                              </b-col>
                              <b-col class="float-right">
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_007_1" name="we_7007_007_1"></b-form-input>
                              </b-col>
                            </b-row>
                            <label for="">Motor Vehicle Registration Fee u/s 231B(1)</label>
                            <b-row>
                              <b-col class="float-left">
                                    <label for="">Receipt</label>
                                    <b-form-input v-model="vehicle.we_7007_008" name="we_7007_008"></b-form-input>
                              </b-col>
                              <b-col class="float-right">
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_008_1" name="we_7007_008_1"></b-form-input>
                              </b-col>
                            </b-row>
                            <label for="">Motor Vehicle Transfer Fee u/s 231B(2)</label>
                            <b-row>
                                <div class="col">
                                    <label for="">Receipt</label>
                                    <b-form-input v-model="vehicle.we_7007_009" name="we_7007_009"></b-form-input>
                                </div>
                                <div class="col">
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_009_1" name="we_7007_009_1"></b-form-input>
                                </div>
                            </b-row>
                            <label for="">Motor Vehicle Sale u/s 231B(3)</label>
                            <b-row>
                              <b-col class="float-left">
                                    <label for="">Receipt</label>
                                    <b-form-input v-model="vehicle.we_7007_010" name="we_7007_010"></b-form-input>
                              </b-col>
                              <b-col class="float-right">        
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_010_1" name="we_7007_010_1"></b-form-input>
                              </b-col>
                            </b-row>
                            <label for="">Motor Vehicle Leasing u/s 231B(1A) @4%</label>
                            <b-row>
                              <b-col class="float-left">
                                    <label for="">Receipt</label>
                                    <b-form-input v-model="vehicle.we_7007_011" name="we_7007_011"></b-form-input>
                              </b-col>
                              <b-col class="float-right">
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_011_1" name="we_7007_011_1"></b-form-input>
                              </b-col>
                            </b-row>
                            <label for="">Private Vehicle Tax u/s 234</label>
                            <b-row>
                              <b-col class="float-left">
                                <div class="col">
                                    <label for="">Receipt</label>
                                    <b-form-input v-model="vehicle.we_7007_012" name="we_7007_012"></b-form-input>
                                </div>
                              </b-col>
                              <b-col class="float-right">            
                                    <label for="">Tax Deducted</label>
                                    <b-form-input v-model="vehicle.we_7007_012_1" name="we_7007_012_1"></b-form-input>
                              </b-col>
                            </b-row>
                        </div>
                        </div>
                    </div>
                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>

                    <div v-show="wealth.we_7007_001==='1'">
                        <b-row>
                            <b-col align-self="start">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="NewVehicles()">+add Vehicle</b-link>
                            </b-col>
                            <b-col align-self="end"></b-col>
                        </b-row>
<br>
                    <b-row>
                        <b-col align-self="start" class="text-right">
                            <b-button @click.prevent="veh_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>

        </b-card-footer>
    </b-tabs>
 </div>

{{newvehicles}}

{{wealth}}
</b-tab>

<b-tab title-item-class="mytab" title="Loan" >
        <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Classroom" overflow="hidden"><circle cx="41.07" cy="68.14" r="4.54" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M50 83 50 78.46C49.9852 77.7526 49.6552 77.0887 49.1 76.65 47.7954 75.6444 46.3027 74.91 44.71 74.49 43.5078 74.121 42.2575 73.9322 41 73.93 39.7438 73.9494 38.4959 74.1377 37.29 74.49 35.715 74.9563 34.2305 75.6867 32.9 76.65 32.3448 77.0887 32.0148 77.7526 32 78.46L32 83Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><circle cx="60.93" cy="68.14" r="4.54" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M70 83 70 78.46C69.9852 77.7526 69.6552 77.0887 69.1 76.65 67.7954 75.6444 66.3027 74.91 64.71 74.49 63.5078 74.121 62.2575 73.9322 61 73.93 59.7438 73.9494 58.4959 74.1377 57.29 74.49 55.715 74.9563 54.2305 75.6867 52.9 76.65 52.3448 77.0887 52.0148 77.7526 52 78.46L52 83Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><circle cx="80.93" cy="68.14" r="4.54" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M90 83 90 78.46C89.9852 77.7526 89.6552 77.0887 89.1 76.65 87.7954 75.6444 86.3027 74.91 84.71 74.49 83.5078 74.121 82.2575 73.9322 81 73.93 79.7438 73.9494 78.4959 74.1377 77.29 74.49 75.715 74.9563 74.2305 75.6867 72.9 76.65 72.3448 77.0887 72.0148 77.7526 72 78.46L72 83Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><circle cx="21.48" cy="26.16" r="5.94" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M56.51 23.87C55.9221 23.2905 54.9779 23.2905 54.39 23.87L41.47 36.79C40.4375 36.4986 39.3279 36.7807 38.56 37.53 38.35 37.74 34.62 43.84 34.62 43.84L33.5 39.07C33.3517 38.455 33.0449 37.8895 32.61 37.43 30.7669 35.9401 28.6457 34.8319 26.37 34.17 24.7612 33.8259 23.1245 33.6284 21.48 33.58 19.8209 33.6056 18.1727 33.8545 16.58 34.32 14.2837 34.922 12.1537 36.0366 10.35 37.58 9.91121 38.0367 9.60374 38.6032 9.46 39.22 9.46 39.22 5.15 57.32 5.15 57.62 5.15 59.2769 6.49315 60.62 8.15 60.62 9.4778 60.5859 10.6251 59.6827 10.97 58.4L14.09 45.49 14.09 87 20 87 20 60.29 23 60.29 23 87 28.9 87 28.9 45.3 30 50C30.0763 50.3249 30.2922 50.5994 30.59 50.75 31.7399 51.6326 33.1408 52.1264 34.59 52.16 35.5336 52.2921 36.4686 51.8674 36.99 51.07L43.09 41.07C43.4799 40.4552 43.6262 39.717 43.5 39L56.5 26C57.0888 25.4137 57.0933 24.4618 56.51 23.87Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M77 10 28 10C25.7909 10 24 11.7909 24 14L24 17.6C25.529 18.0162 26.9132 18.8468 28 20L28 14 77 14 77 47 42.87 47 40.43 51 77 51C79.2091 51 81 49.2091 81 47L81 14C81 11.7909 79.2091 10 77 10Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Loan</p>
                  </template>
           
<div v-show="loanT===1">
    <legend>Have you extended any loan or pre-payment?</legend>
        <b-form-group>
          <b-row>
             <b-form-radio class="col-4" v-model="wealth.we_7007_101" name="we_7007_101" value="0">No</b-form-radio>
             <b-form-radio class="col-4" v-model="wealth.we_7007_101" name="we_7007_101" value="1">Yes</b-form-radio>
          </b-row>

        <b-row>
            <b-col align-self="start">
                <b-button @click.prevent="tabIndex--">Previous</b-button>
            </b-col>

                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7007_101 === '1'" variant="success" @click.prevent="loan_next(2); newloan();">Next</b-button>
                            <b-button v-show="wealth.we_7007_101 === '0'" variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
        </b-row>
</b-form-group>
</div>

            <div v-show="loanT===2">

    <b-tabs content-class="tabs mt-3"  >
         <div  v-for="(loan, index) in loans">
      <b-tab title-item-class="proTab" active title="Loan">
        <template  v-slot:title>     
                   <p>Account {{index + 1}}</p>
        </template>
              <b-form-group>
                            <b-row>
                                <b-col align-self="end" class="text-right">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteloan(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                    <b-col class="float-left">
                    <label class="frmLbl">Type</label>
                    <b-form-input class="flatform" v-model="loan.we_7007_102" name="we_7007_102"></b-form-input>
                  </b-col>
                  <b-col class="float-right">
                            <label class="frmLbl">Name</label>
                            <b-form-input class="flatform" v-model="loan.we_7007_103" name="we_7007_103"></b-form-input>
                  </b-col>
                  </b-row>

                  <b-row>
                    <b-col class="float-left">
                            <label class="frmLbl">Amount</label>
                            <b-form-input class="flatform" v-model="loan.we_7007_105" name="we_7007_105"></b-form-input>
                    </b-col>
                    <b-col class="float-right">
                    </b-col>
                  </b-row>
                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>

                    <div v-show="wealth.we_7007_101=== '1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="loan_next(1)">Previous</b-button>
                        </b-col>
                            <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="newloan()">+add another loan Information</b-link>
                            </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>
        </b-card-footer>
    </b-tabs>
 </div>

{{loans}}

{{wealth}}

</b-tab>

<b-tab title-item-class="mytab" title="Other Asset" >
                  <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Medical" overflow="hidden"><path d="M48 16C30.3 16 16 30.3 16 48 16 65.7 30.3 80 48 80 65.7 80 80 65.7 80 48 80 30.3 65.7 16 48 16ZM48 86C27 86 10 69 10 48 10 27 27 10 48 10 69 10 86 27 86 48 86 69 69 86 48 86Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M68 40 56 40 56 28C56 25.8 54.2 24 52 24L44 24C41.8 24 40 25.8 40 28L40 40 28 40C25.8 40 24 41.8 24 44L24 52C24 54.2 25.8 56 28 56L40 56 40 68C40 70.2 41.8 72 44 72L52 72C54.2 72 56 70.2 56 68L56 56 68 56C70.2 56 72 54.2 72 52L72 44C72 41.8 70.2 40 68 40Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Other Asset</p>
                  </template>

            <div v-show="wealthT===5">
                <legend>Please check the box which is applicable.</legend>
                <b-form-group>
                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="equipment"
                                v-model="wealth.we_7004_1"
                                name="equipment"
                                value="1"
                                unchecked-value="0"
                            >
                                Equipment
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7004_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7004" name=""></b-form-input>
                        </b-col>
                    </b-row>
                    <hr>

                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="animals"
                                v-model="wealth.we_7005_1"
                                name="animals"
                                value="1"
                                unchecked-value="0"
                            >
                                Animals
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7005_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7005" name=""></b-form-input>
                        </b-col>
                    </b-row>
                    <hr>

                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="precious_possession"
                                v-model="wealth.we_7009_1"
                                name="precious_possession"
                                value="1"
                                unchecked-value="0"
                            >
                                Precious Possession
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7009_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7009" name=""></b-form-input>
                        </b-col>
                    </b-row>
                    <hr>

                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="household_effects"
                                v-model="wealth.we_7010_1"
                                name="household_effects"
                                value="1"
                                unchecked-value="0"
                            >
                                Household Effect
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7010_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7010" name=""></b-form-input>
                        </b-col>
                    </b-row>
                    <hr>

                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="personal_items"
                                v-model="wealth.we_7011_1"
                                name="personal_items"
                                value="1"
                                unchecked-value="0"
                            >
                                Personal item
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7011_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7011" name=""></b-form-input>
                        </b-col>
                    </b-row>
                    <hr>

                    <b-row>
                        <b-col>
                            <b-form-checkbox
                                id="other_assets"
                                v-model="wealth.we_7013_1"
                                name="other_assets"
                                value="1"
                                unchecked-value="0"
                            >
                                Any other asset
                            </b-form-checkbox>
                        </b-col>
                        <b-col v-show="wealth.we_7013_1 === '1'">
                            <label for="">Value</label>
                            <b-form-input v-model="wealth.we_7013" name=""></b-form-input>
                        </b-col>
                    </b-row>
                </b-form-group>
                <b-row>
                    <b-col align-self="end" class="text-center">
                        <i>*Note All the assets must be of non-business nature.</i>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col align-self="start">
                        <b-button @click.prevent="tabIndex--">Previous</b-button>
                    </b-col>
                    <b-col align-self="end" class="text-right">
                        <b-button variant="success" @click.prevent="wel_next(6)">Next</b-button>
                    </b-col>
                </b-row>
            </div>

 <div v-show="wealthT===6">

                <legend>Do you own any asset in someone else's name?</legend>
                <b-form-group>
                  <b-row>
                        <b-form-radio class="col-4" v-model="wealth.we_7014_001" name="we_7014_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7014_001" name="we_7014_001" value="1">Yes</b-form-radio>
                  </b-row>
                                        <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="wel_next(5)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7014_001 === '1'" variant="success" @click.prevent="wel_next(7); assets_others_name();">Next</b-button>
                            <b-button v-show="wealth.we_7014_001 === '0'" variant="success" @click.prevent="wel_next(8)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>

</div>
 <div v-show="wealthT===7">

    <b-tabs content-class="tabs mt-3"  >
    <div v-for="(asset, index) in others_name_asset">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p>Asset {{index + 1}}</p>
        </template>
              <b-form-group>
                    <div v-show="wealth.we_7014_001==='1'">
                            <b-row>
                                <b-col align-self="end" class="text-right">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteOthersNameAsset(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">Assest Description</label>
                        <b-form-input class="flatform" v-model="asset.we_7014_002" name="we_7014_002"></b-form-input>
                </b-col>
                <b-col class="float-right">
                        <label class="frmLbl" for="">Amount</label>
                        <b-form-input class="flatform" v-model="asset.we_7014_003" name="we_7014_003"></b-form-input>
                </b-col>
                  </b-row>

                  <b-row>
                  <b-col class="float-left">
                        <label class="frmLbl" for="">Date of acquisition</label>
                        <b-form-input class="flatform" v-model="asset.we_7014_004" name="we_7014_004"></b-form-input>
                  </b-col>
                  <b-col class="float-right">
                        <label class="frmLbl" for="">Name of benamidar</label>
                        <b-form-input class="flatform" v-model="asset.we_7014_005" name="we_7014_005"></b-form-input>
                  </b-col>
                  </b-row>
                  <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">CNIC of benamidar</label>
                        <b-form-input class="flatform" v-model="asset.we_7014_006" name="we_7014_006"></b-form-input>
                    </b-col>
                  <b-col class="float-right"></b-col>
                  </b-row>
                  </div>

                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>        
                    <div v-show="wealth.we_7014_001==='1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="wel_next(6)">Previous</b-button>
                        </b-col>
                        <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="assets_others_name()">+Add Asset Details</b-link>
                            </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="wel_next(8)">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>

        </b-card-footer>
    </b-tabs>

</div>

<div v-show="wealthT===8">
    <legend>Do you own any asset outside Pakistan?</legend>
        <b-form-group>
            <b-row>
                <b-form-radio class="col-4" v-model="wealth.we_7016_001" name="we_7016_001" value="0">No</b-form-radio>
                <b-form-radio class="col-4" v-model="wealth.we_7016_001" name="we_7016_001" value="1">Yes</b-form-radio>
                </b-row>
                    <b-row>
                        <b-col align-self="start">
                            <b-button v-show="wealth.we_7014_001 === '1'" @click.prevent="wel_next(7)">Previous</b-button>
                             <b-button v-show="wealth.we_7014_001 === '0'" @click.prevent="wel_next(6)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7016_001 === '1'" variant="success" @click.prevent="wel_next(9); outsideAsset();">Next</b-button>
                            <b-button v-show="wealth.we_7016_001 === '0'" variant="success" @click.prevent="wel_next(10)">Next</b-button>
                        </b-col>
                    </b-row>
        </b-form-group>

</div>
<div v-show="wealthT===9">
    <b-tabs content-class="tabs mt-3"  >
   <div v-for="(out_asset, index) in asset_outside">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p>Asset {{index + 1}}</p>
        </template>
              <b-form-group>

                    <div v-show="wealth.we_7016_001 === '1'">
                            <b-row>
                                <b-col align-self="end">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteOutsideAsset(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                    <b-col class=" float-left">
                        <label class="frmLbl" for="">Asset Description</label>
                        <b-form-input class="flatform" v-model="out_asset.we_7016_002" name="we_7016_002"></b-form-input>
                  </b-col>
                   <b-col class=" float-right">
                            <label class="frmLbl" for="">Country</label>
                        <b-form-input class="flatform" v-model="out_asset.we_7016_003" name="we_7016_003"></b-form-input>
                  </b-col>
                  </b-row>
                  <b-row>
                    <b-col class=" float-left">
                        <label class="frmLbl" for="">Date of acquisition</label>
                        <b-form-input class="flatform" v-model="out_asset.we_7016_004" name="we_7016_004"></b-form-input>
                    </b-col>
                     <b-col class=" float-right">
                            <label class="frmLbl" for="">Amount</label>
                        <b-form-input class="flatform" v-model="out_asset.we_7016_005" name="we_7016_005"></b-form-input>
                    </b-col>
                  </b-row>

                    </div>
                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>
                    
                <div v-show="wealth.we_7016_001 === '1'">
                         <b-row>
                            <b-col align-self="start">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="outsideAsset()">+Add Assets Details</b-link>
                            </b-col>
                            <b-col align-self="end" class="text-right"></b-col>
                        </b-row>
<br>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="wel_next(8)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="wel_next(10)">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>
        </b-card-footer>
    </b-tabs>

</div>

<div v-show="wealthT===10">
                <legend>Do you own Capital or voting rights in foreign company?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="wealth.we_7018_001" name="we_7016_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7018_001" name="we_7016_001" value="1">Yes</b-form-radio>
                    </b-row>

                    <b-row>
                        <b-col align-self="start">
                            <b-button v-show="wealth.we_7016_001 === '1'" @click.prevent="wel_next(9)">Previous</b-button>
                             <b-button v-show="wealth.we_7016_001 === '0'" @click.prevent="wel_next(8)">Previous</b-button>
                        </b-col>

                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7018_001 === '1'" variant="success" @click.prevent="wel_next(11);foreignCompany();">Next</b-button>
                            <b-button v-show="wealth.we_7018_001 === '0'" variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>

</div>
<div v-show="wealthT===11">

    <b-tabs content-class="tabs mt-3"  >
   <div v-for="(foreign, index) in foreign_company">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p> company Asset {{index + 1}}</p>
        </template>
              <b-form-group>

                    <div v-show="wealth.we_7018_001 === '1'">
                            <b-row>
                                <b-col align-self="end">
                                    <b-link class="btn btn-outline-danger" href="#" @click="deleteforeignCompany(index)">Delete</b-link>
                                </b-col>
                            </b-row>
                  <b-row>
                    <b-col class=" float-left">
                        <label class="frmLbl" for="">Name</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_002" name="we_7018_002"></b-form-input>
                    </b-col>
                    <b-col class=" float-right">
                        <label class="frmLbl" for="">Country</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_003" name="we_7018_003"></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row>
                   <b-col class=" float-left">
                        <label class="frmLbl" for="">Reg no</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_004" name="we_7018_004"></b-form-input>
                   </b-col>
                    <b-col class=" float-right">
                        <label class="frmLbl" for="">Date of incorporation</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_005" name="we_7018_005"></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row>
                     <b-col class=" float-left">
                        <label class="frmLbl" for="">% share</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_006" name="we_7018_006"></b-form-input>
                    </b-col>
                      <b-col class=" float-right">

                        <label class="frmLbl" for="">Income declared</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_007" name="we_7018_007"></b-form-input>
                      </b-col>
                  </b-row>
                  <b-row>
                     <b-col class=" float-left">
                        <label class="frmLbl" for="">Tax year</label>
                        <b-form-input class="flatform" v-model="foreign.we_7018_008" name="we_7018_008"></b-form-input>
                    </b-col>
                  </b-row>
                      </div>
                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>
                    
                <div v-show="wealth.we_7018_001 === '1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="wel_next(10)">Previous</b-button>
                        </b-col>
                            <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="foreignCompany()">+Add Assets Details</b-link>
                            </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>
        </b-card-footer>
    </b-tabs>
</div>
{{others_name_asset}}
{{asset_outside}}

{{foreign_company}}

{{wealth}}
</b-tab>

<b-tab title-item-class="mytab" title="Liabilities" >
                  <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Medical" overflow="hidden"><path d="M48 16C30.3 16 16 30.3 16 48 16 65.7 30.3 80 48 80 65.7 80 80 65.7 80 48 80 30.3 65.7 16 48 16ZM48 86C27 86 10 69 10 48 10 27 27 10 48 10 69 10 86 27 86 48 86 69 69 86 48 86Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M68 40 56 40 56 28C56 25.8 54.2 24 52 24L44 24C41.8 24 40 25.8 40 28L40 40 28 40C25.8 40 24 41.8 24 44L24 52C24 54.2 25.8 56 28 56L40 56 40 68C40 70.2 41.8 72 44 72L52 72C54.2 72 56 70.2 56 68L56 56 68 56C70.2 56 72 54.2 72 52L72 44C72 41.8 70.2 40 68 40Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Liabilities</p>
                  </template>
<div v-show="liabT===1">
                <legend>DO YOU HAVE ANY PAYABLES OR LIABILITIES?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="wealth.we_7021_001" name="we_7021_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="wealth.we_7021_001" name="we_7021_001" value="1">Yes</b-form-radio>
                    </b-row>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="wealth.we_7021_001 === '1'" variant="success" @click.prevent="liab_next(2);newPayable();">Next</b-button>
                            <b-button v-show="wealth.we_7021_001=== '0'" variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>


                    </b-row>
               
                </b-form-group>
</div>

<div v-show="liabT===2">
    
    <b-tabs content-class="tabs mt-3"  >
    <div v-for="(payable, index) in payables">
      <b-tab title-item-class="proTab" active title="Payable">
        <template  v-slot:title>     
                   <p> payable {{index + 1}}</p>
        </template>
              <b-form-group>

                    <div v-show="wealth.we_7021_001 === '1'">
                                <a href="#" @click.prevent="deletePayable(index)">Remove payable</a>
                  <b-row>
                    <b-col class=" float-left">
                    <label class="frmLbl" for="">Type</label>
                    <b-form-input class="flatform" v-model="payable.we_7021_002" name="we_7021_002"></b-form-input>
                </b-col>
                <b-col class=" float-right">
                            <label class="frmLbl" for="">Name</label>
                            <b-form-input class="flatform" v-model="payable.we_7021_003" name="we_7021_003"></b-form-input>
                </b-col>
                  </b-row>
                  <b-row>
                    <b-col class=" float-left">
                            <label class="frmLbl" for="">CNIC</label>
                            <b-form-input class="flatform" v-model="payable.we_7021_004" name="we_7021_004"></b-form-input>
                    </b-col>
                    <b-col class=" float-right">
                            <label class="frmLbl" for="">Amount</label>
                            <b-form-input class="flatform" v-model="payable.we_7021_005" name="we_7021_005"></b-form-input>
                    </b-col>
                  </b-row>
                    </div>
                </b-form-group>
      </b-tab>
      </div>
        <b-card-footer>
                    
                <div  v-show="wealth.we_7021_001 === '1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="liab_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="newPayable()">+Add</b-link>
                            </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>

        </b-card-footer>
    </b-tabs>
</div>

{{payables}}
 {{wealth}}
 
</b-tab>

<b-tab title-item-class="mytab" title="EXPENSESSES" >
                  <template v-slot:title>
<svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Medical" overflow="hidden"><path d="M48 16C30.3 16 16 30.3 16 48 16 65.7 30.3 80 48 80 65.7 80 80 65.7 80 48 80 30.3 65.7 16 48 16ZM48 86C27 86 10 69 10 48 10 27 27 10 48 10 69 10 86 27 86 48 86 69 69 86 48 86Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M68 40 56 40 56 28C56 25.8 54.2 24 52 24L44 24C41.8 24 40 25.8 40 28L40 40 28 40C25.8 40 24 41.8 24 44L24 52C24 54.2 25.8 56 28 56L40 56 40 68C40 70.2 41.8 72 44 72L52 72C54.2 72 56 70.2 56 68L56 56 68 56C70.2 56 72 54.2 72 52L72 44C72 41.8 70.2 40 68 40Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>EXPENSESSES</p>
                  </template>

            <div>
                <legend>ENTER YOUR PERSONAL EXPENSES.</legend>
                <b-form-group>
                    <label for="">Rent</label>
                    <b-form-input v-model="wealth.we_7051" name="we_7051"></b-form-input>

                    <label for="">Rates / Taxes / Charge / Cess</label>
                    <b-form-input v-model="wealth.we_7052" name="we_7052"></b-form-input>

                    <label for="">Vehicle Running / Maintenence</label>
                    <b-form-input v-model="wealth.we_7055" name="we_7055"></b-form-input>

                    <label for="">Travelling</label>
                    <b-form-input v-model="wealth.we_7056" name="we_7056"></b-form-input>

                    <label for="">Electricity</label>
                    <b-form-input v-model="wealth.we_7058" name="we_7058"></b-form-input>

                    <label for="">Water</label>
                    <b-form-input v-model="wealth.we_7059" name="we_7059"></b-form-input>

                    <label for="">Gas</label>
                    <b-form-input v-model="wealth.we_7060" name="we_7060"></b-form-input>

                    <label for="">Telephone</label>
                    <b-form-input v-model="wealth.we_7061" name="we_7061"></b-form-input>

                    <label for="">Asset Insurance / Security</label>
                    <b-form-input v-model="wealth.we_7066" name="we_7066"></b-form-input>

                    <label for="">Medical</label>
                    <b-form-input v-model="wealth.we_7070" name="we_7070"></b-form-input>

                    <label for="">Educational</label>
                    <b-form-input v-model="wealth.we_7071" name="we_7071"></b-form-input>

                    <label for="">Club</label>
                    <b-form-input v-model="wealth.we_7072" name="we_7072"></b-form-input>

                    <label for="">Functions / Gatherings</label>
                    <b-form-input v-model="wealth.we_7073" name="we_7073"></b-form-input>

                    <label for="">Donation, Zakat, Annuity, Profit on Debt, Life Insurance Premium, etc.</label>
                    <b-form-input v-model="wealth.we_7076" name="we_7076"></b-form-input>

                    <label for="">Other Personal / Household Expenses</label>
                    <b-form-input v-model="wealth.we_7087" name="we_7087"></b-form-input>

                    <label for="">Contribution in Expenses by Family Members</label>
                    <b-form-input v-model="wealth.we_7088" name="we_7088"></b-form-input>

                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <!-- <b-button type="submit" variant="success">Next</b-button> -->
                            <b-button @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>


                </b-form-group>
            </div>
{{wealth}}
</b-tab>

<b-tab title-item-class="mytab" title="Summary" >
                  <template v-slot:title>
                    
<svg class="basic" viewBox="0 0 415.999 415.999" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" overflow="hidden"><g><g><rect x="240" y="240" width="64" height="16"/></g></g><g><g><rect x="240" y="288" width="64" height="16"/></g></g><g><g><circle  cx="208.24" cy="48" r="12"/></g></g><g><g><path fill="#ffc000" d="M367.998 96C367.998 78.327 353.672 64 335.999 64L291.575 64C285.649 57.417 278.037 52.38 269.291 49.864 261.924 47.745 256.254 42.075 254.135 34.708 248.371 14.664 229.897 0 207.999 0 186.101 0 167.629 14.663 161.865 34.707 159.743 42.083 154.059 47.746 146.684 49.871 137.946 52.389 130.342 57.421 124.422 64L80 64C62.326 64 48 78.327 48 96L48 383.999C48 401.672 62.326 415.999 80 415.999 153.466 415.999 243.758 415.999 336 415.999 353.674 415.999 368 401.672 368 383.999 368 293.12 367.999 206.097 367.998 96ZM128 95.742C128.11 81.676 137.614 69.136 151.112 65.246 163.822 61.583 173.59 51.82 177.24 39.129 181.157 25.512 193.805 16 207.999 16 222.193 16 234.841 25.512 238.757 39.131 242.409 51.829 252.17 61.59 264.868 65.241 278.486 69.157 287.998 81.806 287.998 95.999L287.998 111.999 128 111.999 128 95.742ZM336 399.999C250.545 399.999 165.23 399.999 80 399.999 71.177 399.999 64 392.821 64 383.999L64 96C64 87.178 71.177 80 80 80L114.742 80C113.012 84.892 112.046 90.143 112.003 95.617L112.003 128 304 128 304 96C304 90.385 303.008 85.009 301.236 80L336 80C344.822 80 351.999 87.178 351.999 96 351.999 141.743 351.998 356.254 352.001 383.999 352 392.822 344.823 399.999 336 399.999Z"/></g></g><g><g><path fill="#ffc000" d="M239.818 175.088 171.952 242.953 154.811 225.811 143.481 237.142 171.935 265.597 191.999 245.534 191.999 287.999 127.999 287.999 127.999 208 175.999 208 191.999 192 111.999 192 111.998 304 207.999 304 207.999 229.534 251.132 186.402Z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>


                     <p>Summary</p>
                  </template>


                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <!-- <b-button type="submit" variant="success">Next</b-button> -->
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
</b-tab>

</div>   
</b-tabs>

        </b-form>

</b-container>
</template>

<script>
    export default {
        name: "Wealth",
        data() {
            return {
                account_type:[
                    {
                            label:"Current Account",
                            options:["current"]
                        },
                        {
                            label:"Saving Account",
                            options:["PLS sharing account","National saving account","Pensioners benefit account","Special saving account","Saving account"]
                        },
                    {
                       label:"Deposit",
                       options:["Term deposit" , "Fixed Deposit" , "Deposit"]
                    },

                    {

                        label: "certificate",
                        options:["Behbood saving certificate", "Defence saving certificate", "Regular income certiiccate", "Short term saving certificate", "Special saving certificate", "Certificate"]

                    },

                    {
                        label:"Bond",
                        options:["Bond"]
                    },
                    {
                        label:"Debenture",
                        options:["Debenture"]
                    },
                    {
                        label:"Fund",
                        options:["Fund"]
                    },
                    {
                        label:"Instrument",
                        options:["Instrument"]
                    },
                    {
                        label:"Annuity",
                        options:["Annuity"]
                    },
                ],

                selectedAccountType:-1,
                selectedOption:'',
                options:[],
                selectedAccountTypeLabel:'',
                tabIndex: 0,
                loanT:1,
                wealthT: 5,
                bankT:1,
                vehT:1,
                liabT:1,
                accounts: [],
                loans:[],
                newvehicles: [],
                others_name_asset:[],
                asset_outside:[],
                foreign_company:[],
                certificates: [],
                payables: [],
                we_7006_10: null,
                wealth: {
                    we_703002: null,
                    we_7004: null,
                    we_7004_1: null,
                    we_7005: null,
                    we_7005_1: null,
                    we_7009: null,
                    we_7009_1: null,
                    we_7011: null,
                    we_7011_1: null,
                    we_7013: null,
                    we_7013_1: null,
                    we_7006_001: null,
                    we_7006_100: null,

                    we_7007_001: null,
                    we_7007_002: null,
                    we_7007_003: null,
                    we_7007_004: null,
                    we_7007_005: null,
                    we_7007_006: null,
                    we_7007_007: null,
                    we_7007_007_1: null,
                    we_7007_008: null,
                    we_7007_008_1: null,
                    we_7007_009: null,
                    we_7007_009_1: null,
                    we_7007_010: null,
                    we_7007_010_1: null,
                    we_7007_011: null,
                    we_7007_011_1: null,
                    we_7007_012: null,
                    we_7007_012_1: null,
                    we_7007_price: null,

                    we_7007_101: null,
                    we_7007_102: null,
                    we_7007_103: null,
                    we_7007_104: null,
                    we_7007_105: null,

                    we_7014_001: null,
                    we_7014_002: null,
                    we_7014_003: null,
                    we_7014_004: null,
                    we_7014_005: null,
                    we_7014_006: null,

                    we_7016_001: null,

                    we_7018_001: null,
                    we_7018_002: null,
                    we_7018_003: null,
                    we_7018_004: null,
                    we_7018_005: null,
                    we_7018_006: null,
                    we_7018_007: null,
                    we_7018_008: null,

                    we_7051: null,
                    we_7052: null,
                    we_7055: null,
                    we_7056: null,
                    we_7058: null,
                    we_7059: null,
                    we_7060: null,
                    we_7061: null,
                    we_7066: null,
                    we_7070: null,
                    we_7071: null,
                    we_7072: null,
                    we_7073: null,
                    we_7076: null,
                    we_7087: null,
                    we_7088: null,


                    opt_we_7006_005: [
                        {value: 'dollar', text: 'Dollar'},
                        {value: 'euro', text: 'Euro'},
                        {value: 'pkr', text: 'Pkr'},
                    ],
                    opt_we_7006_104: [
                        {value: 'dollar', text: 'Dollar'},
                        {value: 'euro', text: 'Euro'},
                        {value: 'pkr', text: 'Pkr'},
                    ],
                }
            }
        },
        methods: {

            selectAccount:function() {
                this.selectedOption = '';
                // console.log(this.selectedOption);
                this.options = this.account_type[this.selectedAccountType].options;
                 console.log(this.options);
                this.selectedAccountTypeLabel = this.account_type[this.selectedAccountType].label;
                // this.we_7006_002 = this.selectedAccountTypeLabel;
                console.log(this.selectedAccountTypeLabel);
            },

            newBankAccount() {
                this.accounts.push({ we_7006_002: '', we_7006_003:'', we_7006_004:'', we_7006_005:'', we_7006_006:'', we_7006_007:'', we_7006_008:'', we_7006_009:'', we_7006_010:'', we_7006_011:'', we_7006_012:'', we_7006_013:'', we_7006_014:'', we_7006_015:'', we_7006_016:''});
            console.log(this.accounts);
            },
            deleteBankAccount(index) {
                this.accounts.splice(index, 1);
            },

            newCertificate() {
                this.certificates.push({we_7006_101:'', we_7006_102:'', we_7006_103:'', we_7006_104:'', we_7006_105:'', we_7006_106:'', we_7006_107:'', we_7006_108:'',})
            },
            deleteCertificate(index) {
                this.certificates.splice(index, 1)
            },
            newloan(){

              this.loans.push({we_7007_102:'',we_7007_103:'',we_7007_105:''})
            },

            deleteloan(index) {
                this.loans.splice(index, 1)
            },

            NewVehicles(){

                this.newvehicles.push({we_7007_002: '', we_7007_003:'',we_7007_004:'', we_7007_price:'', we_7007_005:'', we_7007_006:'', we_7007_007:'', we_7007_007_1:'',
                        we_7007_008:'', we_7007_008_1:'', we_7007_009:'', we_7007_009_1:'', we_7007_010:'', we_7007_010_1:'',
                        we_7007_011:'', we_7007_011_1:'', we_7007_012:'', we_7007_012_1:''

                })

            },
            deleteVehicles(index){

                this.newvehicles.splice(index, 1);
            },

            assets_others_name(){
              this.others_name_asset.push({we_7014_002:'', we_7014_003:'',we_7014_004:'',we_7014_005:''});
            },
            deleteOthersNameAsset(index){
              this.others_name_asset.splice(index, 1);
            },

            outsideAsset(){

                this.asset_outside.push({we_7016_002:'',we_7016_003:'', we_7016_004:'',we_7016_005:''});
            },

            deleteOutsideAsset(index){
               this.asset_outside.splice(index, 1);
            },

            foreignCompany(){

            this.foreign_company.push({we_7018_002:'', we_7018_003:'', we_7018_004:'', we_7018_005:'', we_7018_006:'', we_7018_007:'', we_7018_008:''});
            },

            deleteforeignCompany(index){

                this.foreign_company.splice(index,1);
            },

            newPayable() {
                this.payables.push({we_7021_002:'', we_7021_003:'', we_7021_004:'', we_7021_005:'',})
            },
            deletePayable(index) {
                this.payables.splice(index, 1)
            },
            wel_next(addition) {
                this.wealthT = addition
            },
            loan_next(addition) {
                this.loanT = addition
            },
            bnk_next(addition) {
                this.bankT = addition
            },
            liab_next(addition) {
                this.liabT = addition
            },
            veh_next(addition) {
                this.vehT = addition
            },
            dateComparision(we_7007_005) {
                let startDate = new Date('2018-01-7');
                let endDate = new Date('2019-06-30');

                let today = new Date(we_7007_005);
                console.log(startDate);
                console.log(endDate);
                console.log(today);
                console.log(startDate < today && today < endDate);
                return (startDate < today && today < endDate);
            },
            formsubmit(e) {
                let self = this;
                e.preventDefault();
                axios.post('/api/wealthInfo', {
                    we_703002: this.wealth.we_703002,
                    we_7004: this.wealth.we_7004,
                    we_7005: this.wealth.we_7005,
                    we_7009: this.wealth.we_7009,
                    we_7010: this.wealth.we_7010,
                    we_7011: this.wealth.we_7011,
                    we_7013: this.wealth.we_7013,
                    we_7006_001: this.wealth.we_7006_001,
                    we_accounts: this.accounts,
                    we_vehicles: this.newvehicles,
                    we_loans: this.loans,
                    we_others_name_asset : this.others_name_asset,
                    we_outside_asset : this.asset_outside,
                    we_foreign_company: this.foreign_company,
                    we_7006_100: this.wealth.we_7006_100,
                    we_certificates: this.certificates,

                    we_7007_001: this.wealth.we_7007_001,
                    we_7007_002: this.wealth.we_7007_002,
                    we_7007_003: this.wealth.we_7007_003,
                    we_7007_004: this.wealth.we_7007_004,
                    we_7007_005: this.wealth.we_7007_005,
                    we_7007_006: this.wealth.we_7007_006,
                    // we_7007_007: this.wealth.we_7007_007,
                    // we_7007_007_1: this.wealth.we_7007_007_1,
                    // we_7007_008: this.wealth.we_7007_008,
                    // we_7007_008_1: this.wealth.we_7007_008_1,
                    // we_7007_009: this.wealth.we_7007_009,
                    // we_7007_009_1: this.wealth.we_7007_009_1,
                    // we_7007_010: this.wealth.we_7007_010,
                    // we_7007_010_1: this.wealth.we_7007_010_1,
                    // we_7007_011: this.wealth.we_7007_011,
                    // we_7007_011_1: this.wealth.we_7007_011_1,
                    // we_7007_012: this.wealth.we_7007_012,
                    // we_7007_012_1: this.wealth.we_7007_012_1,

                    we_7007_101: this.wealth.we_7007_101,
                    we_7007_102: this.wealth.we_7007_102,
                    we_7007_103: this.wealth.we_7007_103,
                    we_7007_104: this.wealth.we_7007_104,
                    we_7007_105: this.wealth.we_7007_105,
                    we_7014_001: this.wealth.we_7014_001,
                    we_7014_002: this.wealth.we_7014_002,
                    we_7014_003: this.wealth.we_7014_003,
                    we_7014_004: this.wealth.we_7014_004,
                    we_7014_005: this.wealth.we_7014_005,
                    we_7014_006: this.wealth.we_7014_006,
                    we_7016_001: this.wealth.we_7016_001,
                    we_7018_001: this.wealth.we_7018_001,
                    we_7018_002: this.wealth.we_7018_002,
                    we_7018_003: this.wealth.we_7018_003,
                    we_7018_004: this.wealth.we_7018_004,
                    we_7018_005: this.wealth.we_7018_005,
                    we_7018_006: this.wealth.we_7018_006,
                    we_7018_007: this.wealth.we_7018_007,
                    we_7018_008: this.wealth.we_7018_008,

                    we_7021_001: this.wealth.we_7021_001,
                    we_payables: this.payables,

                    we_7051: this.wealth.we_7051,
                    we_7052: this.wealth.we_7052,
                    we_7055: this.wealth.we_7055,
                    we_7056: this.wealth.we_7056,
                    we_7058: this.wealth.we_7058,
                    we_7059: this.wealth.we_7059,
                    we_7060: this.wealth.we_7060,
                    we_7061: this.wealth.we_7061,
                    we_7066: this.wealth.we_7066,
                    we_7070: this.wealth.we_7070,
                    we_7071: this.wealth.we_7071,
                    we_7072: this.wealth.we_7072,
                    we_7073: this.wealth.we_7073,
                    we_7076: this.wealth.we_7076,
                    we_7087: this.wealth.we_7087,
                    we_7088: this.wealth.we_7088

                }).then(function (response) {
                    alert('success');
                     // self.$router.push('/other-income');
                }).catch(function (error) {
                    alert(error)
                })
            }
        }
    }
</script>
