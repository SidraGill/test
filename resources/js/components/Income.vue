
<template>
     <b-container>
        <div class="md-stepper-horizontal">
            <div class="md-step">
                <router-link to="personal">
                    <div class="md-step-title">Personal</div>
                </router-link>
            </div>
            <!-- <div class="md-step active editable">-->
            <div class="md-step active">
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

        <b-form @submit="formsubmit">

 <b-tabs pills v-model="tabIndex" align="center" content-class="mt-3">
    <div class="tex-center">

<b-tab title-item-class="mytab" title="Basic Info" >
    <template v-slot:title>
        <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Wallet" overflow="hidden"><path d="M74 57C71.8 57 70 55.2 70 53 70 50.8 71.8 49 74 49 76.2 49 78 50.8 78 53 78 55.2 76.2 57 74 57ZM84 43 82 43 82 32C82 29.8 80.2 28 78 28L22 28C20.9 28 20 27.1 20 26 20 24.9 20.9 24 22 24L78 24 78 22C78 19.8 76.2 18 74 18L22 18C17.6 18 14 21.6 14 26L14 70C14 74.4 17.6 78 22 78L78 78C80.2 78 82 76.2 82 74L82 63 84 63C85.1 63 86 62.1 86 61L86 45C86 43.9 85.1 43 84 43Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Salary</p>
    </template>


            <div v-show="salaryT===1">
                <h3> lets switch gear and start looking at your income. </h3>
                <b-row>
                    <b-col align-self="start">   
                        <b-button type="button" >
                          <router-link to="personal">
                        <div class="btnlnk">Previous</div>
                        </router-link>
                        </b-button>
                    </b-col>
                    <b-col align-self="end">
                        <b-button variant="success" @click.prevent="sal_next(2)">Lets go</b-button>
                    </b-col>
                </b-row>
            </div>
            <div v-show="salaryT===2" class="row justify-content-center">
                <b-form-group>
                <b-row class="row justify-content-center ml-4">
                    <legend>Do you have salery income in Pakistan?</legend>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_001" name="sa_1000_001" value="0">
                            <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_001" name="sa_1000_001" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                    </b-row>
                </b-row>
                <b-row  v-show="salary.sa_1000_001 === '1'">
                        <label class="frmLbl" for="employerType">Employer Type</label>
                        <b-form-select class="flatform" v-model="salary.sa_1000_002" :options="salary.opt_sa_1000_002" name="employerType"></b-form-select>
                        <label class="frmLbl" for="employerName">Employer Name</label>
                        <b-form-input class="flatform" v-model="salary.sa_1000_003" name="employerName"></b-form-input>
                        <label class="frmLbl" for="employer_designation">Designation</label>
                        <b-form-input class="flatform" v-model="salary.sa_1000_004" name="employer_designation"></b-form-input>
                    </b-row><br>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" v-show="salary.sa_1000_002 && salary.sa_1000_003 && salary.sa_1000_004" @click.prevent="sal_next(3)">
                                Next
                            </b-button>
                            <b-button variant="success" v-show="salary.sa_1000_001 === '0'" @click.prevent="sal_next(13)">Next</b-button>
                        </b-col>
                    </b-row>

                </b-form-group>
            </div>
            <div v-show="salaryT===3">
                <legend>Select all that apply to you;</legend>
                <b-form-group label="Individual radios">
                 <b-form-radio v-model="salary.sa_1000_005" name="some-radios" value="1">I am AKNDP employee
                 </b-form-radio>
                 <b-form-radio v-model="salary.sa_1000_006" name="some-radios" value="1">I am a seafarer and stayed on ship formore than 183 days
                 </b-form-radio>
                 <b-form-radio v-model="salary.sa_1000_007" name="some-radios" value="1">I am a full time teacher
                 </b-form-radio>
                 <b-form-radio v-model="salary.sa_1000_008" name="some-radios" value="1">I am a full time researcher
                </b-form-radio>
                <b-form-radio v-model="salary.sa_1000_009" name="some-radios" value="1">I am a pilot of Pakistani airline
                </b-form-radio>
                <b-form-radio v-model="salary.sa_1000_010" name="some-radios" value="1">I am a Pakistan government employee & working abroad
                </b-form-radio>
            </b-form-group>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(2)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(4)">Next</b-button>
                        </b-col>
                    </b-row>
            </div>

        <b-row v-show="salaryT===4" class=" justify-content-center">
            <b-form-group>
               <legend>Do you have tax deduction certificate from your employer?</legend>         <b-row class="row justify-content-center">
                        <b-form-radio class="col-4" v-model="salary.sa_1000_011" name="sa_1000_011" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_011" name="sa_1000_011" value="1">Yes</b-form-radio>
                        </b-row>

                    <b-row v-if="salary.sa_1000_011==='1'">
                        <label class="frmLbl" for="">Taxable Salary (July - June)</label>
                        <b-form-input class="flatform" v-model="salary.sa_1000_800" name="sa_1000_800"></b-form-input>
                        <label class="frmLbl" for="">Tax Deducted</label>
                        <b-form-input class="flatform" v-model="salary.sa_1000_900" name="sa_1000_900"></b-form-input>
                        <br>
                        <b-row>
                            <b-col align-self="start">
                                <b-button @click.prevent="sal_next(3)">Previous</b-button>
                            </b-col>
                            <b-col align-self="end" class="text-right">
                                <b-button variant="success" class="float-right" @click.prevent="sal_next(13)">Next</b-button>
                            </b-col>
                        </b-row>
                    </b-row>
                    <b-row v-else-if="salary.sa_1000_011==='0'">
                            <b-col align-self="start">
                                <b-button @click.prevent="sal_next(3)">Previous</b-button>
                            </b-col>
                            <b-col align-self="end" class="text-right">
                                <b-button variant="success" class="float-right" @click.prevent="sal_next(5)">Next</b-button>
                            </b-col>
                    </b-row>
                </b-form-group>
        </b-row>
            <b-row v-show="salaryT===5">
                <b-form-group>
                    <legend>Let us workout your taxable salary;</legend>
                    <p>You will be needing your payslip to fill this section</p>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(4)">Previous</b-button>
                        </b-col>
                        <b-col align-self="center">
                            <b-button variant="outline-primary" @click.prevent="sal_next(6)">Skip For Later</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(6)">Next</b-button>
                        </b-col>

                    </b-row>
                </b-form-group>
            </b-row>
            <div v-show="salaryT===6">
                <legend>Salary Received in Cash</legend>
                <b-form-group>
                    <label for="">Basic Salary</label>
                    <b-form-input v-model="salary.sa_1000_100" name="basicSalary"></b-form-input>
                    <label for="">medical</label>
                    <b-form-input v-model="salary.sa_1000_101" name="medical"></b-form-input>
                    <label for="">COLA</label>
                    <b-form-input v-model="salary.sa_1000_102" name="cola"></b-form-input>
                    <label for="">BONUS/COMMISSION/LEAVE PAY/OVERTIME/LEAVEPAY ETC</label>
                    <b-form-input v-model="salary.sa_1000_103" name=""></b-form-input>
                    <label for="">ALL OTHERS ALLOWANCES IN CASH</label>
                    <b-form-input v-model="salary.sa_1000_104" name=""></b-form-input>
                    <label v-show="salary.sa_1000_006 || salary.sa_1000_009" for="">Flying / Submarine Allowance (not
                        exceeding basic pay) u/c (1), Part III, 2nd Schedule
                    <b-form-input v-model="salary.sa_1000_105" name=""></b-form-input>
                    </label>
                    <label v-show="salary.sa_1000_006 || salary.sa_1000_009" for="">Allowance to Pilots (exceeding basic
                        pay) u/c (1AA), Part III, 2nd Schedule
                        <b-form-input v-model="salary.sa_1000_106" name=""></b-form-input>
                    </label>

                    <div v-show="salary.sa_1000_010">
                        <label v-show="salary.sa_1000_010" for="">Transport Monetization for Civil Servants (after deduction
                            of drivers salary) u/c (27), Part II, 2nd Schedule </label>
                        <b-form-input v-model="salary.sa_1000_107" name=""></b-form-input>
                    </div>
                    <label for="">salaryAL EXPENSES REIMBURSEMENT</label>
                    <b-form-input v-model="salary.sa_1000_108" name=""></b-form-input>
                    <label for="">TA/DA, PERDIEM</label>
                    <b-form-input v-model="salary.sa_1000_109" name=""></b-form-input>
                    <label for="">SALARY RECEIVED IN ARREAR</label>
                    <b-form-input v-model="salary.sa_1000_110" name=""></b-form-input>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(5)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(7)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="salaryT===7">
                <legend>Tax Deducted</legend>
                <b-form-group>
                    <label for="">Tax Deducted</label>
                    <b-form-input v-model="salary.sa_1000_900" name=""></b-form-input>
                    <label for=""> Does y

                    our employer pay your taxes?</label>
                <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_901" name="sa_1000_901" value="0">
                            <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_901" name="sa_1000_901" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                </b-row>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(6)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(8)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="salaryT===8">
                <legend>PERQIUSITS (benefits in kind)</legend>
                <b-form-group>
                    <div v-show="salary.sa_1000_101===0 ">
                        <label for=""> FREE MEDICAL TREATMENT</label>
                        <b-row>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_201" name="sa_1000_201" value="0">No</b-form-radio>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_201" name="sa_1000_201" value="1">Yes</b-form-radio>
                    </b-row>
                    </div>
                    <div v-show="salary.sa_1000_102==='0'">
                        <br>
                        <label for=""> ACCOMODATION</label>
                        <b-row>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_202" name="sa_1000_202" value="0">No</b-form-radio>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_202" name="sa_1000_202" value="1">Yes</b-form-radio>
                        </b-row>
                        <div v-show="salary.sa_1000_202==='1'">
                            <label for="">Annual Rent Amount</label>
                            <b-form-input v-model="salary.sa_1000_202_1" name="sa_1000_202_1"></b-form-input>
                        </div>
                    </div>
                    <br>
                    <label for=""> SERVANT</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_203" name="sa_1000_203" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_203" name="sa_1000_203" value="1">Yes</b-form-radio>
                    </b-row>
                    <br>
                    <div v-show="salary.sa_1000_203==='1'">
                        <label for="">Annual Salary and Benefits</label>
                        <b-form-input v-model="salary.sa_1000_203_1" name="sa_1000_203_1"></b-form-input>
                    </div>
                    <br>
                    <label for=""> CONVEYANCE</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_204" name="sa_1000_204" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_204" name="sa_1000_204" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_204==='1'">
                        <br>
                        <label for="">Please select the type FULLY/PARTIALLY</label>
                        <b-form-select v-model="salary.sa_1000_205" :options="salary.opt_sa_1000_205"></b-form-select>
                        <br>
                        <label>COST OF CONVEYANCE</label>
                        <b-form-input v-model="salary.sa_1000_206" name="costOfConveyance"></b-form-input>
                        <label>Did you receive the vehicle after June 30th, 2018?</label>
                        <b-row>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_207" name="sa_1000_207" value="0">No</b-form-radio>
                            <b-form-radio class="col-4" v-model="salary.sa_1000_207" name="sa_1000_207" value="1">Yes</b-form-radio>
                        </b-row>
                        <br>
                        <div v-show="salary.sa_1000_207==='1'">
                            <label>Date on which your employer provided you with the vehicle</label>
                            <b-form-input type="date" v-model="salary.sa_1000_208" name="sa_1000_208"></b-form-input>
                        </div>
                    </div>

                    <br>
                    <label>LEAVE FARE ASSISTANCE</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_209" name="sa_1000_209" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_209" name="sa_1000_209" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_209==='1'">
                        <label for="">Value</label>
                        <b-form-input v-model="salary.sa_1000_209_1" name="sa_1000_209_1"></b-form-input>
                    </div>
                    <br>
                    <label>ANY AMOUNT WAIVED/PAID BY EMPLOYER FOR EMPLOYEE</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_210" name="sa_1000_210" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_210" name="sa_1000_210" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_210==='1'">
                        <label for="">Value</label>
                        <b-form-input v-model="salary.sa_1000_210_1" name="sa_1000_210_1"></b-form-input>
                    </div>
                    <br>
                    <label>VALUE OF ANY ASSET TRANSFERRED BY EMPLOYER LESS: AMOUNT PAID BY EMPLOYEE</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_211" name="sa_1000_211" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_211" name="sa_1000_211" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_211==='1'">
                        <label for="">Value</label>
                        <b-form-input v-model="salary.sa_1000_211_1" name="sa_1000_211_1"></b-form-input>
                    </div>
                </b-form-group>
                <b-row>
                    <b-col align-self="start">
                        <b-button @click.prevent="sal_next(7)">Previous</b-button>
                    </b-col>
                    <b-col align-self="end" class="text-right">
                        <b-button variant="success" @click.prevent="sal_next(9)">Next</b-button>
                    </b-col>
                </b-row>
            </div>
            <div v-show="salaryT===9">
                <legend>Interest free / less than 10% interest Loan from employer</legend>
                <b-form-group>
                    <label for="">Did you receive loan from employer?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_250" name="sa_1000_250" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_250" name="sa_1000_250" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_250==='1'">
                        <label for="">Interest @ ;</label>
                        <b-form-input v-model="salary.sa_1000_251" name=""></b-form-input>
                        <label for="">Loanbalance as at July 1, 2018</label>
                        <b-form-input v-model="salary.sa_1000_252" name=""></b-form-input>
                        <label for="">Loan balance as at June 30, 2019</label>
                        <b-form-input v-model="salary.sa_1000_253" name=""></b-form-input>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(8)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(10)">Next</b-button>
                        </b-col>
                    </b-row>

                </b-form-group>
            </div>
            <div v-show="salaryT===10">
                <legend>DOES YOUR EMPLOYER CONTRIBUTE IN PROVIDENT FUND?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_300" name="sa_1000_300" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_300" name="sa_1000_300" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-if="salary.sa_1000_300==='1'">
                        <label for="">Please select the type of fund</label>
                        <b-form-select v-model="salary.sa_1000_301" :options="salary.opt_sa_1000_301"></b-form-select>
                        <div v-show="salary.sa_1000_301 === 'recognized'">
                            <label for="">EMPLOYER ANNUAL CONTRIBUTION</label>
                            <b-form-input v-model="salary.sa_1000_302" name=""></b-form-input>
                            <label for="">INTEREST THEREON</label>
                            <b-form-input v-model="salary.sa_1000_303" name=""></b-form-input>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(9)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(11)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="salaryT===11">
                <legend>PROFIT IN LIEU OF SALARY / employment termination benefits</legend>
                <b-form-group>
                    <label>Did you receive Profits in Lieu of or in Addition to Pay, Wages or Other Remuneration
                        (including Employment Termination Benefits)?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_400" name="sa_1000_400" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_400" name="sa_1000_400" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_400==='1'">
                        <b-row>
                            <b-col class="float-left">
                                <label for="">Provident Fund (Employer's contribution and interest thereon only)</label>
                                <b-form-input v-model="salary.sa_1000_401" name=""></b-form-input>
                             </b-col>
                             <b-col class="float-right">
                                <label for="">Type of Provident Fund</label>
                                <b-form-select v-model="salary.sa_1000_401_1" :options="salary.opt_sa_1000_401_1"></b-form-select>
                        </b-col>
                        </b-row>
                        <b-row>
                            <b-col class="float-left">
                                <label for="">Gratuity</label>
                                <b-form-input v-model="salary.sa_1000_402" name=""></b-form-input>
                            </b-col>
                            <b-col class="float-right">
                                <label for="">Type of Gratuity</label>
                                <b-form-select v-model="salary.sa_1000_402_1" :options="salary.opt_sa_1000_402_1"></b-form-select>
                            </b-col>
                        </b-row>

                    <b-row>
                        <b-col class="float-left">
                        <label for="">other employment termination benefits</label>
                        <b-form-input v-model="salary.sa_1000_403" name=""></b-form-input>
                        </b-col>
                        <b-col class="float-right">
                        <label for="">Any other amount received in addition to pay, wages</label>
                        <b-form-input v-model="salary.sa_1000_404" name=""></b-form-input>
                        </b-col>
                    </b-row>
                        <b-row>
                            <b-col align-self="start">
                                <b-button @click.prevent="sal_next(10)">Previous</b-button>
                            </b-col>
                            <b-col align-self="end" class="text-right">
                                <button v-if="salary.sa_1000_002==='listed'" @click.prevent="sal_next(12)">Previous</button>
                                <button v-else @click.prevent="sal_next(13)">Next</button>
                            </b-col>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(10)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(12)">Next</b-button>
                        </b-col>
                    </b-row>

                </b-form-group>
            </div>
            <div v-show="salaryT===12">
                <legend>employee share scheme</legend>
                <b-form-group>
                    <label>ANY SHARES ASSIGNED DURING THE YEAR?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_500" name="sa_1000_500" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_500" name="sa_1000_500" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="salary.sa_1000_500==='1'">
                        <label for="">DATE WHEN FREE TO SELL</label>
                        <b-form-input type="date" v-model="salary.sa_1000_501" name=""></b-form-input>
                        <label for="">MARKET VALUE OF SHARES ON __________ </label>
                        <b-form-input v-model="salary.sa_1000_502" name=""></b-form-input>
                        <label for="">Less: Amount paid as consideration</label>
                        <b-form-input v-model="salary.sa_1000_503" name=""></b-form-input>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="sal_next(11)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="sal_next(13)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="salaryT===13" class="row justify-content-center">

                <b-form-group>
                                    <legend>Pension</legend>
                    <label>Do you receive pension during the year?</label>
                    <b-row class="justify-content-center">
                        <b-form-radio class="col-4" v-model="salary.sa_1000_600" name="sa_1000_600" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="salary.sa_1000_600" name="sa_1000_600" value="1">Yes</b-form-radio>
                    </b-row>

                    <div v-show="salary.sa_1000_600==='1'">
                        <label class="frmLbl" for="">Amount
                            <b-form-input class="flatform" v-model="salary.sa_1000_601" name=""></b-form-input>
                        </label>
                    </div><br>
                    <b-row>
                        <b-col align-self="start">
                            <b-button v-if="salary.sa_1000_001 === '1'" @click.prevent="sal_next(12)">Previous</b-button>
                            <b-button v-else @click.prevent="sal_next(2)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                          <!--   <b-button type="submit"  variant="success" >Next</b-button> -->
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>

            {{salary}}
</b-tab>

<b-tab title-item-class="mytab"  title="Property" >
        <template v-slot:title>
        <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_Home" overflow="hidden"><path d="M48 12 48 12 6 52 10.5 55.8 48 20.2 48 20.2 85.5 55.8 90 52Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M18 54.3 18 84 42 84 42 59 54 59 54 84 78 84 78 54.3 48 25.8 18 54.3Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>       
                   <p>Property</p>

        </template>
            <b-row v-show="propertyT===1" class="justify-content-center">

                <b-form-group>
                    <b-row class="justify-content-center">
                  <b-row> 
                    <legend style=" text-align: center;">Do you have any property in Pakistan registered in your name during</legend>
                    <legend style=" text-align: center;">July 01. 2018 - June 30, 2019?</legend>
                    <h4 style="text-align: center;"></h4>
                </b-row> 

                        <b-form-radio class="col-4" v-model="property.pr_2000_001" name="fileReturn" value="0">NO</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_001" name="fileReturn" value="1">Yes</b-form-radio>
                    </b-row>
                    <b-row><br>
                        <b-col align-self="start">
                            <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="property.pr_2000_001 === '1'" variant="success" @click.prevent="prop_next(2); newProperty();">Next</b-button>
                            <!-- <b-button type="submit" variant="success" v-show="property.pr_2000_001 === '0'">Next</b-button> -->
                              
                        </b-col>
                    </b-row>
                </b-form-group>
            </b-row>
            <div v-show="propertyT===2">

<b-tabs content-class="tabs mt-3" v-model="propTab"  >
    <div v-for="(proper, index) in properties">
      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     
                   <p>Property {{index + 1}}</p>

        </template>
         <b-form-group>
                        <b-row>
                            <b-col align-self="end" class="text-right">
                                <b-link class="btn btn-outline-danger" href="#" @click="deleteProperty(index)">Delete</b-link>
                            </b-col>
                        </b-row>
                <b-row>
                  <b-col class="float-left">
                       <label class="frmLbl" for="">Type</label>
                        <b-form-select class="flatform" v-model="proper.pr_2000_002" :options="property.opt_pr_2000_002" name=""></b-form-select>
                  </b-col>
                  <b-col class="float-right ">
                        <label class="frmLbl" for="">Area(Marla)</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_003" name="pr_2000_003"></b-form-input>
                   </b-col>
                  </b-row>
                <b-row>
                    <b-col class="float-left">
                        <label class="frmLbl" for="">Address</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_004" name="pr_2000_004"></b-form-input>
                      </b-col>
                      <b-col class="float-right">
                        <label class="frmLbl" for="">City</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_005" name="pr_2000_005"></b-form-input>
                      </b-col>
                  </b-row>

                  <b-row>
                  <b-col class="float-left">
                       <label class="frmLbl" for="">DOP</label>
                        <b-form-input class="flatform" type="date" v-model="proper.pr_2000_101" @change="dateComparision(proper.pr_2000_101)" name="pr_2000_101"></b-form-input>
                   </b-col>
                   <b-col class="float-right">
                        <label class="frmLbl" for="">Purchased Price</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_102" name="pr_2000_102">
                        </b-form-input>
                   </b-col>
                  </b-row>          
            <b-row>
                <b-col class=" float-left">
                    <label class="frmLbl" for="">Co-Owned</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="property.pr_2000_201" name="pr_2000_201" value="0">NO</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_201" name="pr_2000_201" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="property.pr_2000_201 === '1'">
                        <label class="frmLbl">if Yes, % ownership</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_202" name="pr_2000_202"></b-form-input>
                    </div>
                </b-col>
                <b-col class="float-right ">
                <label class="frmLbl">Interest paid against loan for construction?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="property.pr_2000_501" name="pr_2000_501" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_501" name="pr_2000_501" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="property.pr_2000_501 === '1'">
                        <label class="frmLbl">Interest amount</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_502" name="pr_2000_502"></b-form-input>
                    </div>
                </b-col>
            </b-row>
                <b-row>
                 <b-col class="float-left">
                    <label class="frmLbl" for="">RENTED OR SELF OCCUPIED?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="property.pr_2000_301" name="pr_2000_301" value="0">Rented</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_301" name="pr_2000_301" value="1">Self-Occupied</b-form-radio>
                    </b-row>
                    <div v-if="property.pr_2000_301=== '0'">
                        <label class="frmLbl">RENT INCOME</label>
                        <b-form-input class="flatform" v-model="proper.pr_2001" name="pr_2001"></b-form-input>
                        <label class="frmLbl">DEPOSIT RECEIVED</label>
                        <b-form-input class="flatform" v-model="proper.pr_2002_001" name="pr_2002_001"></b-form-input>
                        <label class="frmLbl">Date of Deposit Receipt</label>
                        <b-form-input class="flatform" type="date" v-model="proper.pr_date" name="pr_date"></b-form-input>
                        <label class="flatform" for="">TAX DEDUCTED</label>
                        <b-form-input class="flatform" v-model="proper.pr_64080052" name="pr_64080052"></b-form-input>
                        <label class="frmLbl">Allowable Deduction</label>
                        <label class="frmLbl">1/5th of Rent of Building for Repairs</label>
                        <b-form-input class="flatform" v-model="proper.pr_2031" name="pr_2031"></b-form-input>
                        <label class="frmLbl" for="">Insurance Premium</label>
                        <b-form-input class="flatform" v-model="proper.pr_2032" name="pr_2032"></b-form-input>
                        <label for="">Local Rate / Tax / Charge / Cess</label>
                        <b-form-input class="flatform" v-model="proper.pr_2033" name="pr_2033"></b-form-input>
                        <label for="">Other Deductions against Rent</label>
                        <b-form-input class="flatform" v-model="proper.pr_2098" name="pr_2098"></b-form-input>
                    </div>
                  </b-col>
                    <b-col class="float-right ">
                    <label class="frmLbl">Sold this property during the year?</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="property.pr_2000_401" name="pr_2000_401" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_401" name="pr_2000_401" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="property.pr_2000_401 === '1'">
                        <label class="frmLbl" for="">DOS</label>
                        <b-form-input class="flatform" type="date" v-model="proper.pr_2000_402" name="pr_2000_402"></b-form-input>

                        <label class="frmLbl" for="">Sale Price</label>
                        <b-form-input class="flatform" v-model="proper.pr_2000_403" name="pr_2000_403"></b-form-input>

                        <label class="frmLbl">Sale / Transfer of Immovable proper u/s 236C (FROM SELLER)</label>
                        <b-form-input class="flatform" v-model="proper.pr_64150301" name="pr_64150301"></b-form-input>

                        <label class="frmLbl">Tax Deducted u/s 236C where property purchased & sold within Tax Year</label>
                        <b-form-input class="flatform" v-model="proper.pr_64150302" name="pr_64150302"></b-form-input>

                        <label class="frmLbl">Tax Deducted u/s 236C where property purchased prior to current Tax Year</label>
                        <b-form-input class="flatform" v-model="proper.pr_64150303" name="pr_64150303"></b-form-input>
                    </div>
                    </b-col>
                </b-row>
                    <br>
                        <div v-show="dateComparision(proper.pr_2000_101)">
                            <label class="frmLbl" for=""><strong>If purchased this year</strong></label>
                            <br>
                            <label class="frmLbl" for="">Purchase / Transfer of Immovable Property u/s 236K</label>
                            <b-form-input class="flatform" v-model="proper.pr_64151101" name="pr_64151101"></b-form-input>


                            <label class="frmLbl" for="">Advance tax on registering or attesting transfer of immovable proper u/s 236W </label>
                            <b-form-input class="flatform" v-model="proper.pr_64151951" name="pr_64151951"></b-form-input>
                        </div>

        </b-form-group>
      </b-tab>
      </div>


      <b-tab title-item-class="proTab" active title="Property">
        <template  v-slot:title>     

 <a class="btn" href="#" @click.prevent="newProperty()"><i class="fa fa-plus" ></i></a>
        </template>
      </b-tab>
        <b-card-footer>

                    <div v-show="property.pr_2000_001 === '1'">
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="center">
                                <b-link class="btn btn-outline-info" href="#" @click.prevent="newProperty()">+Add Property Here</b-link>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                    </div>

        </b-card-footer>
    </b-tabs>
</div>

{{properties}}<br>
{{property}}
</b-tab>

<b-tab title-item-class="mytab" title="Capital Gain" >
    <template v-slot:title>
        <svg class="basic_info" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Icons_UpwardTrend_LTR" overflow="hidden"><path d="M20 14 14 14 14 82 82 82 82 76 20 76Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/><path d="M66 31 71.9 36.9 64 44.8 58 38.8 48 48.8 42 42.8 23.9 60.9 28.1 65.1 42 51.2 48 57.2 58 47.2 64 53.2 76.1 41.1 82 47 82 31Z" stroke="#FFC000" stroke-width="1.6" stroke-linecap="butt" stroke-opacity="1" fill="none"/></svg>
                     <p>Capital Gain</p>
                  </template>

<div v-show="capitalT===1">
  <legend>Did you own any share/debenturs/MF 30-06-2019?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="capital.ca_4000_001" name="ca_4000_001" value="0">
                            <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4" v-model="capital.ca_4000_001" name="ca_4000_001" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                    </b-row>
                    <div v-show="capital.ca_4000_001 === '1'">

                        <label for="cost">Cost of acquisition</label>
                        <b-form-input v-model="capital.ca_4000_002" name="acquisCost"></b-form-input>

                        <label for="employer_designation">Date of Acquisition</label>
                        <b-form-input v-model="capital.ca_4000_003" type="date" name="dateAcquis"></b-form-input>
                    </div>

                    <b-row>
                        <b-col align-self="start">
                              <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                       <b-button variant="success" @click.prevent="ca_next(2)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>

            </div>
<div v-show="capitalT===2">
  <legend>Have you sold any share/debenturs/MF during the year?</legend>
                <b-form-group>

                   <!--  <label>Investment made between 1st july 2013-30 june 2016</label> -->
                    <b-row>
                        <b-form-radio class="col-4"  v-model="capital.ca_4000_004" name="ca_4000_004" value="0">
                            <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4"  v-model="capital.ca_ca_4000_004" name="ca_ca_4000_004" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                    </b-row>

<div v-show="capital.ca_4000_004==='1'">
<b-row>
    <b-col>
        <label>Holding period less than 12 months</label>
    </b-col>
    <b-col>
            <b-form-input class="flatform" v-model="capital.ca_64220156" name="ca_64220156" placeholder="Capital Gain"></b-form-input>
    </b-col>
    <b-col>
            <b-form-input class="flatform" v-model="capital.ca_64220156_2" name="ca_64220156_2"  placeholder="Tax Deducted"></b-form-input>
    </b-col>
</b-row>
<b-row>
    <b-col>
        <label>Holiding period more than 12 months and less 24 months</label> 
    </b-col>
    <b-col>
            <b-form-input class="flatform" v-model="capital.ca_64220155" name="ca_64220155" placeholder="Capital Gain"></b-form-input>
    </b-col>
    <b-col>
            <b-form-input class="flatform" v-model="capital.ca_64220155_2" name="ca_64220155_2" placeholder="Tax Deducted"></b-form-input>
    </b-col>
</b-row>
<b-row>
    <b-col>
        <label>More than 24 months but acquired after 1st july 2013</label>
    </b-col>
    <b-col>
            <b-form-input class="flatform" v-model="capital.ca_64220157" name="ca_64220157" placeholder="Capital Gain"></b-form-input>
    </b-col>
    <b-col>
            <b-form-input class="flatform"  v-model="capital.ca_64220157_2" name="ca_64220157_2" placeholder="Tax Deducted"></b-form-input>
    </b-col>
</b-row>
<b-row>
    <b-col>
        <label>Before 1st july 2013</label>
    </b-col>
    <b-col>
            <b-form-input class="flatform"  v-model="capital.ca_64220151" name="ca_64220151" placeholder="Capital Gain"></b-form-input>
    </b-col>
    <b-col>
            <b-form-input class="flatform"  v-model="capital.ca_64220151_2" name="ca_64220151_2" placeholder="Tax Deducted"></b-form-input>
    </b-col>
</b-row>
<b-row>
    <b-col>
        <label>Investment made on or after 1st july 2016</label>
    </b-col>
    <b-col>
            <b-form-input class="flatform"  v-model="capital.ca_64220156_1" name="ca_64220156_1" placeholder="Capital Gain"></b-form-input>
    </b-col>
    <b-col>
            <b-form-input class="flatform"  v-model="capital.ca_64220156_1_2" name="ca_64220156_1_2" placeholder="Tax Deducted"></b-form-input>
    </b-col>
</b-row>
</div>
                  <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="ca_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                                <b-button veriant="success" @click.prevent="ca_next(3)">Next</b-button>
                        </b-col>
                    </b-row>
    </b-form-group>

</div>
<div v-show="capitalT===3">
  <legend>Have you sold any other capital asset during the year?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="capital.ca_4000_013" name="ca_4000_013" value="0">
                            <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4" v-model="capital.ca_4000_013" name="ca_4000_013" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                    </b-row>
                    <div v-show="capital.ca_4000_013 === '1'">

                        <label for="employer_designation">Date of purchase</label>
                        <b-form-input v-model="capital.ca_4000_014" type="date" name="datePurchase"></b-form-input>

                        <label for="cost">Purchase amount</label>
                        <b-form-input v-model="capital.ca_4000_015" name="purchasAmnt"></b-form-input>

                        <label for="employer_designation">Date of sale</label>
                        <b-form-input v-model="capital.ca_4000_016" type="date" name="saleDat"></b-form-input>

                        <label for="cost">Sale amount</label>
                        <b-form-input v-model="capital.ca_4000_017" name="saleAmnt"></b-form-input>

                        <label for="cost">Tax deducted</label>
                        <b-form-input v-model="capital.ca_4000_018" name="taxDeduct"></b-form-input>

                        <label for="cost">Description</label>
                        <b-form-input v-model="capital.ca_4000_019" name="description"></b-form-input>

                    </div>

                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="ca_next(2)">Previous</b-button>
                        </b-col>
                        <b-col variant="success" align-self="end" class="text-right">
                            <b-button @click.prevent="ca_next(4)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>

            </div>
<div v-show="capitalT===4">
  <legend>Did you received devident income during the year?</legend>
                <b-form-group>
                    <b-row>

    <b-form-radio class="col-4" v-model="capital.ca_4000_020" name="ca_4000_020" value="0">
         <font-awesome-icon color="red" :icon="['fas', 'times-circle']"/>
                            No
                        </b-form-radio>
                        <b-form-radio class="col-4" v-model="capital.ca_4000_020" name="ca_4000_020" value="1">
                            <font-awesome-icon color="green" :icon="['fas', 'check-circle']"/>
                            Yes
                        </b-form-radio>
                    </b-row>
                    <div v-show="capital.ca_4000_020 === '1'">

<table class="table table-bordered table-condensed">
<tr>
        <th></th>
        <th class="frmLbl">Income earned</th>
        <th class="frmLbl">Tax deducted</th>
        <th class="frmLbl">Name of intitute</th>
</tr>
 <tr>
           <td class="tdLbl">Devident us 150@7.5%(Power Companies)</td>
           <td class="tdinpt">
                <b-form-input class="flatform" v-model="capital.ca_4000_022"></b-form-input>
           </td>
           <td class="tdinpt">
            <b-form-input class="flatform" v-model="capital.ca_4000_022_01"></b-form-input>
           </td>
           <td class="tdinpt">
            <b-form-input class="flatform" v-model="capital.ca_4000_022_02"></b-form-input>
           </td>
 </tr>
 <tr>
           <td class="tdLbl">Devident us 150@10%(Mutual Funds)</td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_023"></b-form-input>
           </td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_023_01"></b-form-input>
           </td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_023_02"></b-form-input>
           </td>
 </tr>
 <tr>
           <td class="tdLbl">Devident us 150@12.5%(Mutual Funds)</td>
           <td class="tdinpt">
            <b-form-input class="flatform" v-model="capital.ca_4000_024"></b-form-input></td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_024_01"></b-form-input>
           </td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_024_02"></b-form-input>
           </td class="tdinpt">
 </tr>
  <tr>
           <td class="tdLbl">Devident us 150@15%(Other Companies)</td>
           <td class="tdinpt">
            <b-form-input class="flatform" v-model="capital.ca_4000_025"></b-form-input></td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_025_01"></b-form-input>
           </td>
           <td class="tdinpt">
               <b-form-input class="flatform" v-model="capital.ca_4000_025_02"></b-form-input>
           </td>
 </tr>
</table>

    </div>
                   <b-row>
                        <b-col align-self="start" class="float-left">
                              <b-button @click.prevent="tabIndex--">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                              <b-button variant="success" @click.prevent="tabIndex++">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
{{capital}}

</b-tab>

    <b-tab title-item-class="mytab" title="Other Sources" >
    <template v-slot:title>
<svg class="basic" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
<g>
    <g>
        <g>
            <path fill="#FFC000" d="M448,24.4H0v256h116.8c-3.2,10.4-4.8,20.8-4.8,31.2c0,61.6,50.4,112,112,112s112-50.4,112-112c0-11.2-1.6-21.6-4.8-31.2
                H448V24.4z M224,407.6c-52.8,0-96-43.2-96-96c0-50.4,38.4-91.2,88-95.2v99.2l69.6,69.6C269.6,398.8,248,407.6,224,407.6z
                 M48,184.4v-64c26.4,0,48-21.6,48-48h256c0,26.4,21.6,48,48,48v64c-26.4,0-48,21.6-48,48h-48.8c-10.4-10.4-22.4-18.4-36-24
                c9.6-12.8,15.2-29.6,15.2-48c0-40-26.4-72-58.4-72s-58.4,32-58.4,72c0,18.4,6.4,35.2,16,48c-13.6,5.6-25.6,13.6-36,24H96.8
                C96,206,74.4,184.4,48,184.4z M80,232.4H48v-32C65.6,200.4,80,214.8,80,232.4z M48,104.4v-32h32C80,90,65.6,104.4,48,104.4z
                 M368,72.4h32v32C382.4,104.4,368,90,368,72.4z M400,200.4v32h-32C368,214.8,382.4,200.4,400,200.4z M224,120.4
                c-15.2,0-28,12.8-28,28c0,5.6,1.6,10.4,4,15.2c-7.2,1.6-12.8,4.8-18.4,7.2c-0.8-3.2-0.8-6.4-0.8-10.4c0-31.2,19.2-56,42.4-56
                s42.4,24.8,42.4,56c0.8,3.2,0,6.4,0,9.6c-4.8-3.2-10.4-5.6-17.6-7.2c2.4-4,4-9.6,4-14.4C252,133.2,239.2,120.4,224,120.4z
                 M236,148.4c0,6.4-5.6,12-12,12c-6.4,0-12-5.6-12-12c0-6.4,5.6-12,12-12C230.4,136.4,236,141.2,236,148.4z M224,175.6
                c18.4,0,28.8,4,36.8,9.6c-2.4,6.4-6.4,12-10.4,16.8c-8.8-2.4-17.6-3.2-26.4-3.2c-9.6,0.8-18.4,2.4-27.2,4
                c-4-4.8-8-10.4-10.4-16.8C195.2,180.4,206.4,175.6,224,175.6z M232,216.4c46.4,4,84,40.8,87.2,87.2H232V216.4z M297.6,374
                L244,320.4h76C317.6,340.4,309.6,358.8,297.6,374z M432,264.4H325.6c-2.4-5.6-5.6-11.2-8.8-16h100v-192h-384v192h100
                c-3.2,4.8-6.4,10.4-8.8,16H16v-224h416V264.4z"/>
            <path fill="#FFC000" d="M112,176.4c13.6,0,24-10.4,24-24c0-13.6-10.4-24-24-24c-13.6,0-24,10.4-24,24C88,166,99.2,176.4,112,176.4z M112,144.4
                c4.8,0,8,3.2,8,8c0,4.8-3.2,8-8,8s-8-3.2-8-8C104,147.6,108,144.4,112,144.4z"/>
            <path fill="#FFC000" d="M336,176.4c13.6,0,24-10.4,24-24c0-13.6-10.4-24-24-24c-13.6,0-24,10.4-24,24C312,166,323.2,176.4,336,176.4z M336,144.4
                c4.8,0,8,3.2,8,8c0,4.8-3.2,8-8,8s-8-3.2-8-8C328,147.6,332,144.4,336,144.4z"/>
        </g>
    </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
    <p>Other Sources</p>
                  </template>

            <div v-show="otherIT === 1">
                <legend>Did you recive any of the following during this year?</legend>
                <b-form-group>
                    <label for="">Yield on Behbood Certificates / Pensioner's Benefit Account / Shuhada Family Benefit Account</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5003041" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5003041" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5003041==='1'">
                        <b-row>
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5003041_1" name=""></b-form-input>
                            </div>
                        </b-row>
                    </div>

                    <br>
                    <label for="">Prize on Prize Bond u/s 156</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_001" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_001==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_001_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_001_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_001_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>
                    <br>
                    <label for="">Winnings from Crossword Puzzle u/s 156</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_002" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_002" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_002==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_002_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_002_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_002_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>

                    <br>
                    <label for="">Winnings from Raffle u/s 156</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_003" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_003" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_003==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_003_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_003_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_003_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>
                    <br>
                    <label for="">Winnings from Lottery u/s 156</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_004" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_004" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_004==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_004_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_004_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_004_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>
                    <br>
                    <label for="">Winnings from Quiz u/s 156</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_005" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_005" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_005==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_005_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_005_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_005_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>

                    <br>
                    <label for="">ANY OTHER INCOME/RECEIPT</label>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_006" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_006" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5028_006==='1'">
                        <b-row>
                            <b-col>
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_006_1" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_006_2" name=""></b-form-input>
                            </b-col>
                            <b-col>
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_006_3" name=""></b-form-input>
                            </b-col>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="ot_next(2)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="ot_next(2)">Next</b-button>
                        </b-col>
                    </b-row>

                </b-form-group>
            </div>
            <div v-show="otherIT===2">
                <legend>Do you have any foreign Income?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_6000_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_6000_001" name="" value="1">Yes</b-form-radio>
                    </b-row>

                    <div v-show="other.oth_6000_001==='1'">
                        <b-row>
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_6000_002" name=""></b-form-input>

                            <label for="">Exempt amount</label>
                            <b-form-input v-model="other.oth_6000_003" name=""></b-form-input>

                            <label for="">Tax paid</label>
                            <b-form-input v-model="other.oth_6000_004" name=""></b-form-input>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(1)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(3)">Next</b-button></b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="otherIT===3">
                <legend>Do you have Agriculture Income?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_6100_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_6100_001" name="" value="1">Yes</b-form-radio>
                    </b-row>

                    <div v-show="other.oth_6100_001==='1'">
                        <b-row>
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_6100_002" name=""></b-form-input>

                            <label for="">Exempt amount</label>
                            <b-form-input v-model="other.oth_6100_003" name=""></b-form-input>

                            <label for="">Tax paid</label>
                            <b-form-input v-model="other.oth_6100_004" name=""></b-form-input>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(2)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(4)">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
            <div v-show="otherIT===4">
                <legend>DID YOU RECEIVE pension/anuity INCOME DURING THE YEAR?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5007_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5007_001" name="" value="1">Yes</b-form-radio>
                    </b-row>
                    <div v-show="other.oth_5007_001==='1'">
                        <b-row>
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_5007_002" name=""></b-form-input>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(3)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(5)">Next</b-button></b-col>
                    </b-row>
                </b-form-group>
            </div>
            <div v-show="otherIT===5">
                <legend>DID YOU RECEIVE any inheritance/gift DURING THE YEAR?</legend>
                <b-form-group>
                    <b-row>
                        <b-form-radio class="col-4" v-model="other.oth_5028_100" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_100" name="" value="1">Yes</b-form-radio>
                    </b-row>

                    <div v-show="other.oth_5028_100==='1'">
                        <b-row>
                            <label for="">Type</label>
                            <b-form-select v-model="other.oth_5028_101" :options="other.opt_oth_5028_101"></b-form-select>

                            <div v-show="other.oth_5028_101==='kind'">
                                <label for="">Description</label>
                                <b-form-input v-model="other.oth_5028_102" name=""></b-form-input>
                            </div>

                            <div v-show="other.oth_5028_101==='cash'">
                                <label for="">Amount</label>
                                <b-form-input v-model="other.oth_5028_103" name=""></b-form-input>

                                <label for="">Banking Channel</label>
                                <b-row>
                                    <b-form-radio class="col-4" v-model="other.oth_5028_104" name="" value="0">No</b-form-radio>
                                    <b-form-radio class="col-4" v-model="other.oth_5028_104" name="" value="1">Yes</b-form-radio>
                               </b-row>
                            </div>
                        </b-row>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(4)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right">
                          <!--   <b-button type="submit" varient="success">Next</b-button> -->

                              <b-button @click.prevent="tabIndex++">Next</b-button>

                        </b-col>
                    </b-row>


                </b-form-group>
            </div>

            {{other}}
</b-tab>

<b-tab title-item-class="mytab" title="Summary" >
    <template v-slot:title>
                    
        <svg class="basic" viewBox="0 0 415.999 415.999" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" overflow="hidden"><g><g><rect x="240" y="240" width="64" height="16"/></g></g><g><g><rect x="240" y="288" width="64" height="16"/></g></g><g><g><circle  cx="208.24" cy="48" r="12"/></g></g><g><g><path fill="#ffc000" d="M367.998 96C367.998 78.327 353.672 64 335.999 64L291.575 64C285.649 57.417 278.037 52.38 269.291 49.864 261.924 47.745 256.254 42.075 254.135 34.708 248.371 14.664 229.897 0 207.999 0 186.101 0 167.629 14.663 161.865 34.707 159.743 42.083 154.059 47.746 146.684 49.871 137.946 52.389 130.342 57.421 124.422 64L80 64C62.326 64 48 78.327 48 96L48 383.999C48 401.672 62.326 415.999 80 415.999 153.466 415.999 243.758 415.999 336 415.999 353.674 415.999 368 401.672 368 383.999 368 293.12 367.999 206.097 367.998 96ZM128 95.742C128.11 81.676 137.614 69.136 151.112 65.246 163.822 61.583 173.59 51.82 177.24 39.129 181.157 25.512 193.805 16 207.999 16 222.193 16 234.841 25.512 238.757 39.131 242.409 51.829 252.17 61.59 264.868 65.241 278.486 69.157 287.998 81.806 287.998 95.999L287.998 111.999 128 111.999 128 95.742ZM336 399.999C250.545 399.999 165.23 399.999 80 399.999 71.177 399.999 64 392.821 64 383.999L64 96C64 87.178 71.177 80 80 80L114.742 80C113.012 84.892 112.046 90.143 112.003 95.617L112.003 128 304 128 304 96C304 90.385 303.008 85.009 301.236 80L336 80C344.822 80 351.999 87.178 351.999 96 351.999 141.743 351.998 356.254 352.001 383.999 352 392.822 344.823 399.999 336 399.999Z"/></g></g><g><g><path fill="#ffc000" d="M239.818 175.088 171.952 242.953 154.811 225.811 143.481 237.142 171.935 265.597 191.999 245.534 191.999 287.999 127.999 287.999 127.999 208 175.999 208 191.999 192 111.999 192 111.998 304 207.999 304 207.999 229.534 251.132 186.402Z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>


                     <p>Summary</p>
                  </template>

  <template>
    <div>
        <div class="head1">
        <legend>Here's all your <b>income</b> we know about.</legend>
        <p> we're including all of our calculations so the number here might look a little different than what you entered.</p>
    </div>


      <b-table  responsive="sm" :items="items"> 
        <template v-slot:head(Your_Info)="scope">
        Total Income <label  class="float-right"> 560000</label>
        </template>
       <template v-slot:cell(Your_Info)="data">
          <label class="lblcol">{{ data.value.income}}<a class="float-right" @click="tab_next(0)"><i class="fa fa-edit" style="font-size:15px"></i></a></label><br>
       </template>
      </b-table>
    </div>
  </template>

  <b-row>
    <b-col align-self="start" >
        <b-button @click="tabIndex--">Previous</b-button>
    </b-col>
    <b-col align-self="end" class="text-right">
        <b-button variant="success" class="float-right" >
            <router-link to="deduction">
                <div class="btnlnk">Next</div>
            </router-link>
        </b-button>
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
        name: "income",
        name:"Property",
        name: "Other_Income",
        name:"capital",
        data(){ return {
                capitalT:1,
                capital:{
                    ca_64220156: null,
                    ca_64220156_2: null,
                    ca_64220156_1: null,
                    ca_64220156_1_2: null,
                    ca_64220155: null,
                    ca_64220155_2: null,
                    ca_64220157: null,
                    ca_64220157_2: null,
                    ca_64220151: null,
                    ca_64220151_2: null,
                    ca_64220100:null,

                    ca_4000_001: null,
                    ca_4000_002:null,
                    ca_4000_003:null,
                    ca_4000_004:null,
                    ca_4000_005:null,
                    ca_4000_006:null,
                    ca_4000_007:null,
                    ca_4000_008:null,
                    ca_4000_009:null,
                    ca_4000_010:null,
                    ca_4000_011:'shares',
                    ca_4000_012:null,
                    opt_list: [
                        {value: null, text: 'Please select type'},
                        {value: 'shares', text: 'Shares'},
                        {value: 'debenturs', text: 'Debenturs'},
                        {value: 'mf', text: 'MF'}
                    ],
                    ca_4000_013:null,
                    ca_4000_014:null,
                    ca_4000_015:null,
                    ca_4000_016:null,
                    ca_4000_017:null,
                    ca_4000_018:null,
                    ca_4000_019:null,
                    ca_4000_020:null,
                    ca_4000_021:null,
                    ca_4000_022:null,
                    ca_4000_023:null,
                    ca_4000_024:null,
                    ca_4000_025:null,
                    ca_4000_022_01:null,
                    ca_4000_023_01:null,
                    ca_4000_024_01:null,
                    ca_4000_025_01:null,
                    ca_4000_022_02:null,
                    ca_4000_023_02:null,
                    ca_4000_024_02:null,
                    ca_4000_025_02:null,
            
                },
                otherIT: 1,
                other: {
                    oth_5003041: null,
                    oth_5028_001: null,
                    oth_5028_001_1: null,
                    oth_5028_001_2: null,
                    oth_5028_001_3: null,
                    oth_5028_002: null,
                    oth_5028_002_1: null,
                    oth_5028_002_2: null,
                    oth_5028_002_3: null,
                    oth_5028_003: null,
                    oth_5028_003_1: null,
                    oth_5028_003_2: null,
                    oth_5028_003_3: null,
                    oth_5028_004: null,
                    oth_5028_004_1: null,
                    oth_5028_004_2: null,
                    oth_5028_004_3: null,
                    oth_5028_005: null,
                    oth_5028_005_1: null,
                    oth_5028_005_2: null,
                    oth_5028_005_3: null,
                    oth_5028_006: null,
                    oth_5028_006_1: null,
                    oth_5028_006_2: null,
                    oth_5028_006_3: null,
                    oth_6000_001: null,
                    oth_6000_002: null,
                    oth_6000_003: null,
                    oth_6000_004: null,
                    oth_6100_001: null,
                    oth_6100_002: null,
                    oth_6100_003: null,
                    oth_6100_004: null,
                    oth_5007_001: null,
                    oth_5007_002: null,
                    oth_5028_100: null,
                    oth_5028_101: null,
                    oth_5028_102: null,
                    oth_5028_103: null,
                    oth_5028_104: null,

                    opt_oth_5028_101: [
                        {value: 'cash', text: 'Cash'},
                        {value: 'kind', text: 'Kind'},
                    ]
                },
                propertyT: 1,
                propTab:0,
                properties: [],
                property: {
                    pr_2000_001: null,
                    pr_2000_201: null,
                    pr_2000_202: null,
                    pr_2000_301: null,
                    pr_2001: null,
                    pr_2031: null,
                    pr_2032: null,
                    pr_2033: null,
                    pr_2098: null,
                    pr_2002_001: null,
                    pr_2000_401: null,
                    pr_2000_402: null,
                    pr_2000_403: null,
                    pr_64150301: null,
                    pr_64150302: null,
                    pr_64150303: null,
                    pr_2000_501: null,
                    pr_2000_502: null,
                    pr_date: null,
                    dv:null,

                    opt_pr_2000_002: [
                        {value: 'agricultural', text: 'Agricultural'},
                        {value: 'commercial', text: 'Commercial'},
                        {value: 'industrial', text: 'Industrial'  },
                        {value: 'residential', text: 'Residential'  },
                    ],
                },
                tabIndex:0,
                  salaryT: 1,
                salary: {
                    sa_1000_001: null,
                    sa_1000_002: 'federal',
                    sa_1000_003: null,
                    sa_1000_004: null,
                    sa_1000_005: null,
                    sa_1000_006: null,
                    sa_1000_007: null,
                    sa_1000_008: null,
                    sa_1000_009: null,
                    sa_1000_010: null,
                    sa_1000_100: null,
                    sa_1000_101: 0,
                    sa_1000_102: 0,
                    sa_1000_103: null,
                    sa_1000_104: null,
                    sa_1000_105: null,
                    sa_1000_106: null,
                    sa_1000_107: null,
                    sa_1000_108: null,
                    sa_1000_109: null,
                    sa_1000_110: null,
                    sa_1000_900: null,
                    sa_1000_901: null,
                    sa_1000_201: null,
                    sa_1000_202: null,
                    sa_1000_202_1: null,
                    sa_1000_203: null,
                    sa_1000_203_1: 0,
                    sa_1000_204: null,
                    sa_1000_205: 'partly',
                    sa_1000_206: null,
                    sa_1000_207: null,
                    sa_1000_208: null,
                    sa_1000_209: null,
                    sa_1000_209_1: 0,
                    sa_1000_210: null,
                    sa_1000_210_1: 0,
                    sa_1000_211: null,
                    sa_1000_211_1: 0,
                    sa_1000_250: null,
                    sa_1000_251: null,
                    sa_1000_252: null,
                    sa_1000_253: null,
                    sa_1000_300: null,
                    sa_1000_301: 'recognized',
                    sa_1000_302: null,
                    sa_1000_303: null,
                    sa_1000_400: null,
                    sa_1000_401: null,
                    sa_1000_401_1: 'govt',
                    sa_1000_402: null,
                    sa_1000_402_1: 'govt',
                    sa_1000_403: null,
                    sa_1000_404: null,
                    sa_1000_500: null,
                    sa_1000_501: null,
                    sa_1000_502: null,
                    sa_1000_503: null,
                    sa_1000_600: null,
                    sa_1000_601: null,
                    sa_1000_800: null,
                    opt_sa_1000_002: [
                        {value: 'federal', text: 'Federal Government'},
                        {value: 'provincial', text: 'Provincial Government'},
                        {value: 'corporate', text: 'Corporate'},
                        {value: 'listed', text: 'Corporate - listed'},
                        {value: 'other', text: 'Other'},
                    ],
                    opt_sa_1000_301: [
                        {value: 'govt', text: 'Government'},
                        {value: 'recognized', text: 'Recognized'},
                        {value: 'unrecognized', text: 'Unrecognized'},
                    ],
                    opt_sa_1000_205: [
                        {value: 'fully', text: 'Only for Private Use'},
                        {value: 'partly', text: 'partly for the private use and partly for official use'},
                    ],
                    opt_sa_1000_401_1: [
                        {value: 'govt', text: 'Government'},
                        {value: 'recognized', text: 'Recognized'},
                        {value: 'unrecognized', text: 'Unrecognized'},
                        {value: 'act1925', text: 'Fund formed under the Provident Fund Act, 1925'},
                    ],
                    opt_sa_1000_402_1: [
                        {value: 'govt', text: 'Government'},
                        {value: 'commissioner', text: 'Fund approved by Commissioner'},
                        {value: 'board', text: 'Scheme approved by board'},
                        {value: 'other', text: 'Any other Case'},
                    ]
                },
                fields: [{key:'info', label:'Your Info'}],
                // items: [
                //          {
                //               Your_Info:'Income from salary ',
                //           }
                //         ],
        items: [
          { Your_Info: { income: 'Income from salary'} },
          { Your_Info: { income: 'Income from property'} },
          { Your_Info: { income: 'Capital gain'} },
          { Your_Info: { income: 'Income from other sources'} },
          { Your_Info: { income: 'Foreign income'} },
          { Your_Info: { income: 'Agriculture income'} },
             ]
            }
        },
        computed: {},
        methods: {
            prop_next(addition) {
                this.propertyT = addition;
            },
            newProperty() {
                this.properties.push({pr_2000_002: '', pr_2000_003: '', pr_2000_004: '', pr_2000_005: '',
                    pr_2000_101: '', pr_2000_102: '', pr_64151101: '', pr_64151951: '', pr_2000_502:'',
                   pr_2000_202:'', pr_2001:'', pr_2002_001:'', pr_date:'', pr_2031:'', pr_2032:'', pr_2033:'', pr_2098:'',
                    pr_2000_402:'', pr_2000_403:'', pr_64150301:'', pr_64150302:'', pr_64150303:'' })
            },
            deleteProperty(index) {
                this.properties.splice(index, 1)
            },
            dateComparision(pr_2000_101) {
                let startDate = new Date('2018-01-7');
                let endDate = new Date('2019-06-30');

                let today = new Date(pr_2000_101);
                return (startDate < today && today < endDate);
            },
            formsubmit(e) {
                e.preventDefault();
                let self = this;
                axios.post('/api/propertyInfo', {
                    pr_2000_001: this.property.pr_2000_001,
                    pr_property: this.properties,
                    pr_2000_201: this.property.pr_2000_201,
                    pr_2000_202: this.property.pr_2000_202,
                    pr_2000_301: this.property.pr_2000_301,
                    pr_2001:     this.property.pr_2001,
                    pr_2031:     this.property.pr_2031,
                    pr_2032:     this.property.pr_2032,
                    pr_2033:     this.property.pr_2033,
                    pr_2098:     this.property.pr_2098,
                    pr_2002_001: this.property.pr_2002_001,
                    pr_2000_401: this.property.pr_2000_401,
                    pr_2000_402: this.property.pr_2000_402,
                    pr_2000_403: this.property.pr_2000_403,
                    pr_64150301: this.property.pr_64150301,
                    pr_64150302: this.property.pr_64150302,
                    pr_64150303: this.property.pr_64150303,
                    pr_2000_501: this.property.pr_2000_501,
                    pr_2000_502: this.property.pr_2000_502,
                    pr_date: this.property.pr_date,
                }).then(function (response) {
                     self.$router.push('/deduction');
                    alert('success');
                }).catch(function (error) {
                    alert(error)
                })
            },


            sal_next(addition) {
                this.salaryT = addition;
            },
            ca_next(addition) {
                this.capitalT = addition;
            },

            formsubmit(e) {
                let self = this;
                e.preventDefault();
                axios.post('/api/incomeInfo', {
                    sa_1000_001: this.salary.sa_1000_001,
                    sa_1000_002: this.salary.sa_1000_002,
                    sa_1000_003: this.salary.sa_1000_003,
                    sa_1000_004: this.salary.sa_1000_004,
                    sa_1000_005: this.salary.sa_1000_005,
                    sa_1000_006: this.salary.sa_1000_006,
                    sa_1000_007: this.salary.sa_1000_007,
                    sa_1000_008: this.salary.sa_1000_008,
                    sa_1000_009: this.salary.sa_1000_009,
                    sa_1000_010: this.salary.sa_1000_010,
                    sa_1000_100: this.salary.sa_1000_100,
                    sa_1000_101: this.salary.sa_1000_101,
                    sa_1000_102: this.salary.sa_1000_102,
                    sa_1000_103: this.salary.sa_1000_103,
                    sa_1000_104: this.salary.sa_1000_104,
                    sa_1000_105: this.salary.sa_1000_105,
                    sa_1000_106: this.salary.sa_1000_106,
                    sa_1000_107: this.salary.sa_1000_107,
                    sa_1000_108: this.salary.sa_1000_108,
                    sa_1000_109: this.salary.sa_1000_109,
                    sa_1000_110: this.salary.sa_1000_110,
                    sa_1000_900: this.salary.sa_1000_900,
                    sa_1000_901: this.salary.sa_1000_901,
                    sa_1000_201: this.salary.sa_1000_201,
                    sa_1000_202: this.salary.sa_1000_202,
                    sa_1000_202_1: this.salary.sa_1000_202_1,
                    sa_1000_203: this.salary.sa_1000_203,
                    sa_1000_203_1: this.salary.sa_1000_203_1,
                    sa_1000_204: this.salary.sa_1000_204,
                    sa_1000_205: this.salary.sa_1000_205,
                    sa_1000_206: this.salary.sa_1000_206,
                    sa_1000_207: this.salary.sa_1000_207,
                    sa_1000_208: this.salary.sa_1000_208,
                    sa_1000_209: this.salary.sa_1000_209,
                    sa_1000_209_1: this.salary.sa_1000_209_1,
                    sa_1000_210: this.salary.sa_1000_210_1,
                    sa_1000_210_1: this.salary.sa_1000_210_1,
                    sa_1000_211: this.salary.sa_1000_211,
                    sa_1000_211_1: this.salary.sa_1000_211_1,
                    sa_1000_250: this.salary.sa_1000_250,
                    sa_1000_251: this.salary.sa_1000_251,
                    sa_1000_252: this.salary.sa_1000_252,
                    sa_1000_253: this.salary.sa_1000_253,
                    sa_1000_300: this.salary.sa_1000_300,
                    sa_1000_301: this.salary.sa_1000_301,
                    sa_1000_302: this.salary.sa_1000_302,
                    sa_1000_303: this.salary.sa_1000_303,
                    sa_1000_400: this.salary.sa_1000_400,
                    sa_1000_401: this.salary.sa_1000_401,
                    sa_1000_401_1: this.salary.sa_1000_401_1,
                    sa_1000_402: this.salary.sa_1000_402,
                    sa_1000_404: this.salary.sa_1000_404,
                    sa_1000_500: this.salary.sa_1000_500,
                    sa_1000_501: this.salary.sa_1000_501,
                    sa_1000_502: this.salary.sa_1000_502,
                    sa_1000_503: this.salary.sa_1000_503,
                    sa_1000_600: this.salary.sa_1000_600,
                    sa_1000_601: this.salary.sa_1000_601,
                    sa_1000_800: this.salary.sa_1000_800,
                }).then(function (response) {
                    alert('success')
                     self.$router.push('/property')
                }).catch(function (error) {
                    alert(error);
                })
            },
                        ot_next(addition) {
                this.otherIT = addition;
            },
            formsubmit(e) {
                let self = this;
                e.preventDefault();
                axios.post('/api/otherInfo', {
                    oth_5003041: this.other.oth_5003041,
                    oth_5028_001: this.other.oth_5028_001,
                    oth_5028_001_1: this.other.oth_5028_001_1,
                    oth_5028_001_2: this.other.oth_5028_001_2,
                    oth_5028_001_3: this.other.oth_5028_001_3,
                    oth_5028_002: this.other.oth_5028_002,
                    oth_5028_002_1: this.other.oth_5028_002_1,
                    oth_5028_002_2: this.other.oth_5028_002_2,
                    oth_5028_002_3: this.other.oth_5028_002_3,
                    oth_5028_003: this.other.oth_5028_003,
                    oth_5028_003_1: this.other.oth_5028_003_1,
                    oth_5028_003_2: this.other.oth_5028_003_2,
                    oth_5028_003_3: this.other.oth_5028_003_3,
                    oth_5028_004: this.other.oth_5028_004,
                    oth_5028_004_1: this.other.oth_5028_004_1,
                    oth_5028_004_2: this.other.oth_5028_004_2,
                    oth_5028_004_3: this.other.oth_5028_004_3,
                    oth_5028_005: this.other.oth_5028_005,
                    oth_5028_005_1: this.other.oth_5028_005_1,
                    oth_5028_005_2: this.other.oth_5028_005_2,
                    oth_5028_005_3: this.other.oth_5028_005_3,
                    oth_5028_006: this.other.oth_5028_006,
                    oth_5028_006_1: this.other.oth_5028_006_1,
                    oth_5028_006_2: this.other.oth_5028_006_2,
                    oth_5028_006_3: this.other.oth_5028_006_3,
                    oth_6000_001: this.other.oth_6000_001,
                    oth_6000_002: this.other.oth_6000_002,
                    oth_6000_003: this.other.oth_6000_003,
                    oth_6000_004: this.other.oth_6000_004,
                    oth_6100_001: this.other.oth_6100_001,
                    oth_6100_002: this.other.oth_6100_002,
                    oth_6100_003: this.other.oth_6100_003,
                    oth_6100_004: this.other.oth_6100_004,
                    oth_5007_001: this.other.oth_5007_001,
                    oth_5007_002: this.other.oth_5007_002,
                    oth_5028_100: this.other.oth_5028_100,
                    oth_5028_101: this.other.oth_5028_101,
                    oth_5028_102: this.other.oth_5028_102,
                    oth_5028_103: this.other.oth_5028_103,
                    oth_5028_104: this.other.oth_5028_104,
                }).then(function (response) {
                    alert('success');
                    self.$router.push('/Adjustable');
                }).catch(function (error) {
                    alert(error);
                })
            }
        }
    }

</script>

<style scoped>
    .row {
        /*margin-top: 10px;*/
    }

    legend > emp {
        text-transform: uppercase;
    }

    .wrapper-progressBar {
        width: 100%
    }

    .progressBar {
    }

    .progressBar li {
        list-style-type: none;
        float: left;
        width: 25%;
        position: relative;
        text-align: center;
        bottom: 30px;
    }

    .progressBar li a {

        text-decoration: none;
        color: #000;

    }

    .progressBar li:before {
        content: "";
        line-height: 30px;
        border-radius: 0;
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: block;
        text-align: center;
        margin: 0 auto 10px;
        background-color: white
    }

    .progressBar li:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: #ddd;
        top: 15px;
        left: -50%;
        z-index: -1;
    }

    .progressBar li:first-child:after {
        content: none;
    }

    .progressBar li.active {
        color: dodgerblue;
    }

    .progressBar li.active:before {
        border-color: #ffc000;
        background-color: #ffc000;
    }

    .progressBar .active:after {
        background-color: #ffc000;
    }
.tdinpt{
    padding: 0px;
}
.tdLbl{
    padding: 0px; 
    font-size: 13px;
}
.propList{
    list-style: none;

}
.propList li a{
    float: left;
    text-decoration: none;
    color: grey;
    font:500 .8rem/1 Roboto,sans-serif;
}
.propList li:active a, .propList li:hover a{
    color: black;

}
 .tabs{
        width:100%;
       padding: 0px;
       border: none;
  }
  .proTab{
    color: red;
  }
  .nav-pills .mytab .nav-tabs .nav-item .nav-link {
    border:none;
    color: red;
}
.lblcol{
    width: 100%;
}
.head1{
    text-align: center;
}

</style>
