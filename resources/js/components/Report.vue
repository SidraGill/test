<template>
    <div>
        <!--<div class="tableFixHead">
            <h2>Income From Salary</h2>
            <h4>Tax Year {{year}}</h4>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Code</th>
                    <th>Total Amount</th>
                    <th>Amount (Exempt from Tax/ Subject to Fixed/Final Tax)</th>
                    <th>Amount Subject to Normal Tax</th>
                </tr>
                </thead>
                <tbody>

                &lt;!&ndash;For Property&ndash;&gt;
                <tr>
                    <th colspan="5" align="center"> Property</th>
                </tr>
                <tr>
                    <td>Income Loss from Property</td>
                    <td>2000</td>
                    <td>{{pr_2000}}</td>
                    <td></td>
                    <td>{{pr_2000}}</td>
                </tr>
                <tr>
                    <td>Toal Receipts from Property</td>
                    <td>2029</td>
                    <td>{{pr_2029}}</td>
                    <td></td>
                    <td>{{pr_2029}}</td>
                </tr>
                <tr>
                    <td>Rent Recieved or Recievable</td>
                    <td>2001</td>
                    <td>{{pr_2001}}</td>
                    <td></td>
                    <td>{{pr_2001 - exempt_rent}}</td>
                </tr>
                <tr>
                    <td>1/10th of amount not adjustabele against rent</td>
                    <td>2002</td>
                    <td>{{pr_2002}}</td>
                    <td></td>
                    <td>{{pr_2002}}</td>
                </tr>
                <tr>
                    <td>Forefeited deposit under a contract for sale of property</td>
                    <td>2003</td>
                    <td>{{pr_2003}}</td>
                    <td></td>
                    <td>{{pr_2003}}</td>
                </tr>
                <tr>
                    <td>Total Deduction from Property</td>
                    <td>2099</td>
                    <td>{{pr_2099}}</td>
                    <td></td>
                    <td>{{pr_2099}}</td>
                </tr>
                <tr>
                    <td>Other deductions against rent</td>
                    <td>2098</td>
                    <td>{{pr_2098}}</td>
                    <td></td>
                    <td>{{pr_2098}}</td>
                </tr>

                &lt;!&ndash;For Salary&ndash;&gt;
                <tr>
                    <th colspan="5">Salary</th>
                </tr>
                <tr>
                    <td>Income from Salary</td>
                    <td>1000</td>
                    <td>{{sa_1000}}</td>
                    <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical)}}</td>
                    <td>{{parseInt(sa_1000) - (parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical))}}</td>
                </tr>
                <tr>
                    <td>Pay wages or other Remuneration (including arrears of salary)</td>
                    <td>1009</td>
                    <td>{{sa_1009}}</td>
                    <td>0</td>
                    <td>{{parseInt(sa_1009)}}</td>
                </tr>
                <tr>
                    <td>Allowances (Including Flying/Submarine allowance)</td>
                    <td>1049</td>
                    <td>{{sa_1049}}</td>
                    <td>{{medical}}</td>
                    <td>{{parseInt(sa_1049)-parseInt(medical)}}</td>
                </tr>
                <tr>
                    <td>Expenditure Reimbursement</td>
                    <td>1059</td>
                    <td>{{sa_1059}}</td>
                    <td>0</td>
                    <td>{{parseInt(sa_1059)}}</td>
                </tr>
                <tr>
                    <td>Value of Perquisites (including transport Magnetization for Civil Servants)</td>
                    <td>1089</td>
                    <td>{{sa_1089}}</td>
                    <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a)}}</td>
                    <td>{{parseInt(sa_1089) - parseInt(sa_1089_1) + parseInt(sa_1089_1a)}}</td>
                </tr>
                <tr>
                    <td>Profits in Lieu of or in addition to pay, wages or other remuneration (including employement Termination Benefits</td>
                    <td>1099</td>
                    <td>{{sa_1099}}</td>
                    <td>{{parseInt(gratuity) + parseInt(provident)}}</td>
                    <td>{{parseInt(sa_1099) - parseInt(gratuity) + parseInt(provident)}}</td>
                </tr>

                &lt;!&ndash;other sources&ndash;&gt;
                <tr>
                    <th colspan="5">Other Sources</th>
                </tr>
                <tr>
                    <td>Income / (Loss) from Other Sources</td>
                    <td>5000</td>
                    <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_107) + parseInt(oth_5028) + parseInt(sa_1000_601) -
                        parseInt(oth_5089)}}
                    </td>

                    <td>{{parseInt(we_7006_010) + parseInt(we_7006_107)}}</td>

                    <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) - parseInt(oth_5089)}}</td>
                </tr>
                <tr>
                    <td>Receipts from Other Sources</td>
                    <td>5029</td>
                    <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_107) + parseInt(oth_5028) + parseInt(sa_1000_601) }}</td>
                    <td>{{parseInt(we_7006_010) + parseInt(we_7006_107)}}</td>
                    <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) }}</td>
                </tr>
                <tr>
                    <td>Yield on Behbood Certificates / Pensioner's Benefit Account / Shuhada Family Benefit Account</td>
                    <td>5003041</td>
                    <td>{{oth_5003041_1}}</td>
                    <td>0</td>
                    <td>{{oth_5003041_1 - 0}}</td>
                </tr>
                <tr>
                    <td>Profit on Debt (Interest, Yield, etc)</td>
                    <td>5003</td>
                    <td>{{parseInt(we_7006_010) + parseInt(we_7006_107)}}</td>
                    <td>{{parseInt(we_7006_010) + parseInt(we_7006_107)}}</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Other Receipts</td>
                    <td>5028</td>
                    <td>{{oth_5028}}</td>
                    <td>0</td>
                    <td>{{oth_5028 - 0}}</td>
                </tr>
                <tr>
                    <td>Annuity / Pension</td>
                    <td>5007</td>
                    <td>{{sa_1000_601}}</td>
                    <td></td>
                    <td>{{sa_1000_601 - 0}}</td>
                </tr>
                <tr>
                    <td>Deduction From Other Sources</td>
                    <td>5089</td>
                    <td>{{oth_5088}}</td>
                    <td></td>
                    <td>{{oth_5088 - 0}}</td>
                </tr>
                <tr>
                    <td>Other Deductions</td>
                    <td>5088</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;AGRICULTURE&ndash;&gt;

                <tr>
                    <th colspan="5">Agriculture</th>
                </tr>
                <tr>
                    <td>Agriculture Income</td>
                    <td>6100</td>
                    <td>{{oth_6100_002}}</td>
                    <td>{{oth_6100_002}}</td>
                    <td>{{oth_6100_002 - oth_6100_002}}</td>

                </tr>
                &lt;!&ndash;<tr>
                    <td>Agriculture Income Tax</td>
                    <td>9291</td>
                    <td>{{oth_9291}}</td>

                </tr>&ndash;&gt;

                &lt;!&ndash;Foreign Income&ndash;&gt;
                <tr>
                    <th colspan="5">Foreign Income</th>
                </tr>
                <tr>
                    <td>Foreign Income</td>
                    <td>6000</td>
                    <td>{{oth_6000_002}}</td>
                    <td>{{oth_6000_003}}</td>
                    <td>{{oth_6000_002 - oth_6000_003}}</td>
                </tr>

                &lt;!&ndash;Deduction&ndash;&gt;
                <tr>
                    <th colspan="5">Deduction</th>
                </tr>
                <tr>
                    <td>Deductable Allowance</td>
                    <td>9009</td>
                    <td>{{rep_9009_1}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Zakat u/s 60</td>
                    <td>9001</td>
                    <td>{{de_9001_002}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Profit on debt etc u/s 60C</td>
                    <td>9007</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Educational Expenses u/s 60D</td>
                    <td>9008</td>
                    <td>{{de_9008}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>charitable donation u/c 61, part 1, 2nd schedule</td>
                    <td>9004</td>
                    <td>{{cr_9004_002}}</td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;Tax Reduction for teacher and researcher&ndash;&gt;
                <tr>
                    <th colspan="5">Tax reduction for teacher and reasearcher</th>
                </tr>
                <tr>
                    <td>Tax Reduction</td>
                    <td>9030</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Reduction for full time teacher/researcher</td>
                    <td>9302</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Reduction for Foreign film maker</td>
                    <td>9305</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;Tax Credit&ndash;&gt;
                <tr>
                    <th colspan="5">Credit</th>
                </tr>
                <tr>
                    <td>Tax Credits</td>
                    <td>9329</td>
                    <td>{{rep_9329_1}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Credit for charitable Donations u/s 60</td>
                    <td>9311</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Credit for investment in shares, sukkuks and life insurance premium</td>
                    <td>9312</td>
                    <td>{{cr_9312}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Credit for investment in Health Insurance u/s 62A</td>
                    <td>93121</td>
                    <td>{{cr_93121_002}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Credit for Contribution to Approved Pension Fund u/s 63</td>
                    <td>9313</td>
                    <td>{{cr_9313_002}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Credit u/s 103</td>
                    <td>9320</td>
                    <td>{{oth_6000_004}}</td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;Adjustable Tax&ndash;&gt;
                <tr>
                    <th colspan="5">Adjustable Tax</th>

                </tr>
                <tr>
                    <td>Adjustable Tax</td>
                    <td>640000</td>
                    <td></td>
                    <td>{{parseInt(rep_640000)}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Salary of Federal Government Employees u/s 149</td>
                    <td>64020001</td>
                    <td></td>
                    <td>
                        <span v-if="sa_1000_002==='federal'">{{sa_1000_901}}</span>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Salary of Provincial Government Employees u/s 149</td>
                    <td>64020002</td>
                    <td><span v-if="sa_1000_002==='provincial'">{{sa_1000_901}}</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Salary of Corporate Sector Employees u/s 149</td>
                    <td>64020003</td>
                    <td><span v-if="sa_1000_002==='corporate' ||sa_1000_002==='listed'">{{sa_1000_901}}</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Salary of Other Employees u/s 149</td>
                    <td>64020004</td>
                    <td><span v-if="sa_1000_002==='other'">{{sa_1000_901}}</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Directorship Fee u/s 149(3)</td>
                    <td>64020005</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Withdrawal from Pension Fund u/s 156B</td>
                    <td>64090201</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cash Withdrawal from Bank u/s 231A</td>
                    <td>64100101</td>
                    <td></td>
                    <td>{{we_7006_012}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Certain Banking Transactions u/s 231AA</td>
                    <td>64100201</td>
                    <td></td>
                    <td>{{we_7006_013}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motor Vehicle Registration Fee u/s 231B(1)</td>
                    <td>64100301</td>
                    <td></td>
                    <td>{{we_7007_007_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motor Vehicle Transfer Fee u/s 231B(2)</td>
                    <td>64100302</td>
                    <td></td>
                    <td>{{we_7007_008_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motor Vehicle Sale u/s 231B(3)</td>
                    <td>64100303</td>
                    <td></td>
                    <td>{{we_7007_009_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motor Vehicle Leasing u/s 231B(1A) @4%</td>
                    <td>64100304</td>
                    <td></td>
                    <td>{{we_7007_010_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Goods Transport Public Vehicle Tax u/s 234</td>
                    <td>64130001</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Private Vehicle Tax u/s 234</td>
                    <td>64130003</td>
                    <td></td>
                    <td>{{we_7007_011_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Electricity Bill of Domestic Consumer u/s 235A</td>
                    <td>64140101</td>
                    <td></td>
                    <td>{{adj_64140101_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telephone Bill u/s 236(1)(a)</td>
                    <td>64150001</td>
                    <td></td>
                    <td>{{adj_64150001_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cellphone Bill u/s 236(1)(a)</td>
                    <td>64150002</td>
                    <td></td>
                    <td>{{adj_64150002_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Prepaid Telephone Card u/s 236(1)(b)</td>
                    <td>64150003</td>
                    <td></td>
                    <td>{{adj_64150003_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Phone Unit u/s 236(1)(c)</td>
                    <td>64150004</td>
                    <td></td>
                    <td>{{adj_64150004_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Internet Bill u/s 236(1)(d)</td>
                    <td>64150005</td>
                    <td></td>
                    <td>{{adj_64150005_5}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Purchase by Auction u/s 236A</td>
                    <td>64150101</td>
                    <td></td>
                    <td>{{adj_64150101_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Domestic Air Ticket Charges u/s 236B</td>
                    <td>64150201</td>
                    <td></td>
                    <td>{{adj_64150201_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sale / Transfer of Immovable Property u/s 236C</td>
                    <td>64150301</td>
                    <td></td>
                    <td>{{pr_64150301}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Deducted u/s 236C where property purchased & sold within Tax Year</td>
                    <td>64150302</td>
                    <td></td>
                    <td>{{pr_64150302}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Deducted u/s 236C where property purchased prior to current Tax Year</td>
                    <td>64150303</td>
                    <td></td>
                    <td>{{pr_64150303}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Functions / Gatherings Charges u/s 236D</td>
                    <td>64150401</td>
                    <td></td>
                    <td>{{adj_64150401_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Educational Institution Fee u/s 236I</td>
                    <td>64150901</td>
                    <td></td>
                    <td>{{adj_64150901_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Purchase / Transfer of Immovable Property u/s 236K</td>
                    <td>64151101</td>
                    <td></td>
                    <td>{{pr_64151101}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Purchase of International Air Ticket u/s 236L</td>
                    <td>64151201</td>
                    <td></td>
                    <td>{{adj_64151201_1}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Banking transactions otherwise than through cash u/s 236P</td>
                    <td>64151501</td>
                    <td></td>
                    <td>{{we_7006_014}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Education related expenses remitted abroad u/s 236R</td>
                    <td>64151701</td>
                    <td></td>
                    <td>{{we_7006_015}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>General insurance premium u/s 236U</td>
                    <td>64151902</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Life insurance premium u/s 236U</td>
                    <td>64151903</td>
                    <td></td>
                    <td>{{cr_9312_004}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Persons remitting amount abroad through credit / debits / prepaid cards u/s 236Y</td>
                    <td>64151905</td>
                    <td></td>
                    <td>{{we_7006_016}}</td>
                    <td></td>
                </tr>

                &lt;!&ndash;Computations&ndash;&gt;
                <tr>
                    <th colspan="5">Computations</th>
                </tr>
                <tr>
                    <td>Income from salary</td>
                    <td>1000</td>
                    <td>{{sa_1000}}</td>
                    <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical)}}</td>
                    <td>{{parseInt(sa_1000) - (parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical))}}</td>
                </tr>
                <tr>
                    <td>Income/ (Loss) from Property</td>
                    <td>2000</td>
                    <td>{{pr_2000}}</td>
                    <td></td>
                    <td>{{pr_2000}}</td>
                </tr>
                <tr>
                    <td>Income / (Loss) from other sources</td>
                    <td>5000</td>
                    <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_107) + parseInt(oth_5028) + parseInt(sa_1000_601) -
                        parseInt(oth_5089)}}
                    </td>

                    <td>{{parseInt(we_7006_010) + parseInt(we_7006_107)}}</td>

                    <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) - parseInt(oth_5089)}}</td>
                </tr>
                <tr>
                    <td>Foreign Income</td>
                    <td>6000</td>
                    <td>{{oth_6000_002}}</td>
                    <td>{{oth_6000_003}}</td>
                    <td>{{oth_6000_002 - oth_6000_003}}</td>
                </tr>
                <tr>
                    <td>Agriculture Income</td>
                    <td>6100</td>
                    <td>{{oth_6100_002}}</td>
                    <td>{{oth_6100_002}}</td>
                    <td>{{oth_6100_002 - oth_6100_002}}</td>
                </tr>
                <tr>
                    <td>Total Income</td>
                    <td>9000</td>
                    <td>{{rep_6000_1}}</td>
                    <td>{{rep_6000_2}}</td>
                    <td>{{rep_6000_3}}</td>
                </tr>
                <tr>
                    <td>Deductible allowances</td>
                    <td>9009</td>
                    <td>{{parseInt(de_9001_002) + parseInt(de_9008) + parseInt(cr_9004_002)}}</td>
                    <td>0</td>
                    <td>{{parseInt(de_9001_002) + parseInt(de_9008) + parseInt(cr_9004_002)}}</td>
                </tr>
                <tr>
                    <td>Taxable Income</td>
                    <td>9100</td>
                    <td>{{rep_9100_1}}</td>
                    <td>{{rep_9100_2}}</td>
                    <td>{{rep_9100_3}}</td>
                </tr>
                <tr>
                    <td>Tax Chargeable</td>
                    <td>9200</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_920000 + rep_920100_3}}</td>
                </tr>
                <tr>
                    <td>Normal Income Tax</td>
                    <td>920000</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_920000}}</td>
                </tr>
                <tr>
                    <td>Final/Fixed/Minimum/Average/Relevant/Reduced income Tax</td>
                    <td>920100</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_920100_3}}</td>
                </tr>
                <tr>
                    <td>tax reductions</td>
                    <td>9309</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_9309_3}}</td>
                </tr>
                <tr>
                    <td>Tax Credits</td>
                    <td>9329</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_9329_1}}</td>
                </tr>
                <tr>
                    <td>Withholding Income Tax</td>
                    <td>9201</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_640000}}</td>
                </tr>
                <tr>
                    <td>Admitted Income Tax</td>
                    <td>9203</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_9203}}</td>
                </tr>
                <tr>
                    <td>Refundable Income Tax</td>
                    <td>9210</td>
                    <td></td>
                    <td></td>
                    <td>{{rep_9210}}</td>
                </tr>

                &lt;!&ndash;Personal Expenses&ndash;&gt;

                <tr>
                    <th colspan="5">Personal Expenses</th>
                </tr>
                <tr>

                    <td>Personal Expenses</td>
                    <td>7089</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Rent</td>
                    <td>7051</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Rates / Taxes / Charge / Cess</td>
                    <td>7052</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Vehicle Running / Maintenence</td>
                    <td>7055</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Travelling</td>
                    <td>7056</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Electricity</td>
                    <td>7058</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Water


                    </td>
                    <td>7059</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Gas</td>
                    <td>7060</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>7061</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Asset Insurance / Security</td>
                    <td>7066</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Medical
                    </td>
                    <td>7070</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Educational


                    </td>
                    <td>7071</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Club</td>
                    <td>7072</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Functions / Gatherings</td>
                    <td>7073</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Donation, Zakat, Annuity, Profit on Debt, Life Insurance Premium, etc.</td>
                    <td>7076</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Other Personal / Household Expenses</td>
                    <td>7087</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Contribution in Expenses by Family Members</td>
                    <td>7088</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;Personal Assets/Liabilities&ndash;&gt;
                <tr>
                    <th colspan="5">Personal Assets/Liabilities</th>
                </tr>
                <tr>
                    <td>Agricultural Property</td>
                    <td>7001</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Commercial, Industrial, Residential Property (Non-Business)</td>
                    <td>7002</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Business Capital</td>
                    <td>7003</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Equipment (Non-Business)</td>
                    <td>7004</td>
                    <td>{{we_7004}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Animal (Non-Business)</td>
                    <td>7005</td>
                    <td>{{we_7005}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Investment (Non-Business) (Account / Annuity / Bond / Certificate / Debenture / Deposit / Fund / Instrument / Policy / Share / Stock /
                        Unit, etc.)
                    </td>
                    <td>7006</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Debt (Non-Business) (Advance / Debt / Deposit / Prepayment / Receivable / Security)</td>
                    <td>7007</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Motor Vehicle (Non-Business)</td>
                    <td>7008</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Precious Possession</td>
                    <td>7009</td>
                    <td>{{we_7009}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Household Effect</td>
                    <td>7010</td>
                    <td>{{we_7010}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Personal Item
                    </td>
                    <td>7011</td>
                    <td>{{we_7011}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cash (Non-Business)</td>
                    <td>7012</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Any Other Asset</td>
                    <td>7013</td>
                    <td>{{we_7013}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Assets in Others' Name</td>
                    <td>7014</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Assets inside Pakistan</td>
                    <td>7015</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Assets held outside Pakistan</td>
                    <td>7016</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Capital or voting rights in foreign company</td>
                    <td>7018</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Assets held outside pakistan</td>
                    <td>7020</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Assets</td>
                    <td>7019</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Credit (Non-Business) (Advance / Borrowing / Credit / Deposit / Loan / Mortgage / Overdraft / Payable)</td>
                    <td>7021</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Liabilities</td>
                    <td>7029</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                &lt;!&ndash;Reconciliation of Net Profit&ndash;&gt;
                <tr>
                    <th colspan="5">Reconciliation of Net Profit</th>
                </tr>
                <tr>
                    <td>Net Assets Current Year</td>
                    <td>703001</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Net Assets Previous Year</td>
                    <td>703002</td>
                    <td>{{parseInt(we_703002)}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Increase / Decrease in Assets</td>
                    <td>703003</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Inflows</td>
                    <td>7049</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Income Declared as per Return for the year subject to Normal Tax</td>
                    <td>7031</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Income Declared as per Return for the year Exempt from Tax</td>
                    <td>7032</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Income Attributable to Receipts, etc. Declared as per Return for the year subject to Final / Fixed Tax</td>
                    <td>7033</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Adjustments in Income Declared as per Return for the year</td>
                    <td>7034</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Foreign Remittance</td>
                    <td>7035</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Inheritance</td>
                    <td>7036</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Gift</td>
                    <td>7037</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Gain on Disposal of Assets, excluding Capital Gain on Immovable Property</td>
                    <td>7038</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Others</td>
                    <td>7048</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Outflows</td>
                    <td>7099</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Personal Expenses</td>
                    <td>7089</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Gift</td>
                    <td>7091</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Others</td>
                    <td>7098</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Loss on Disposal of Assets</td>
                    <td>7092</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Unreconciled Amount</td>
                    <td>703000</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Assets Transferred / Sold / Gifted / Donated during the year</td>
                    <td>703004</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>-->
        <div>
            <b-tabs content-class="mt-3" align="center">
                <b-tab title="Return" active>
                    <table class="table table-bordered">
                    <thead
                   v-if="sa_1000 || sa_1089_1a || sa_1089_1a || provident || medical ||
                     pr_2000 || oth_5003041_1 || we_7006_010 || we_7006_007 ||
                     oth_5028 || sa_1000_601 || oth_5089 || oth_6000_002 ||
                     oth_6000_003 || oth_6100_002 || rep_6000_1 || rep_6000_2 || rep_6000_3 ||
                     de_9001_002 || de_9008 || cr_9004_002 || rep_9100_1 || rep_9100_2 || rep_9100_3 ||
                     rep_920000 || rep_920100_3 || rep_9309_3 || rep_920100_3 || rep_9309_3 || rep_9329_1 ||
                     rep_640000 || rep_9203 || rep_9210 ||

                     gratuity ||
                     provident ||
                     medical ||

                     pr_2001|| pr_2003|| pr_2031|| pr_2032|| pr_2033 || pr_2098 || pr_2099 || pr_2000 || pr_2002 || pr_2029 || pr_64150301 || pr_64151101 || pr_64150302 || pr_64150303 ||

                     sa_1000 || sa_1009 || sa_1049 || sa_1059 || sa_1089 || sa_1089_1 || sa_1089_1a || sa_1089_per || sa_1099 || sa_1000_002 || sa_1000_601 || sa_1000_901 || sa_1000_007 || sa_1000_008 || sa_1000_900 ||

                     oth_5003041_1 || oth_5028 || oth_5088 || oth_5089 || oth_6000_002 || oth_6000_003 || oth_6000_004 || oth_6100_002 || oth_9100 ||

                     we_7006_010 || we_7006_007 || we_7006_012 || we_7006_013 || we_7007_007_1 || we_7007_008_1 || we_7007_009_1 || we_7007_010_1 || we_7007_011_1 || we_7006_016 || we_7006_014 || we_7006_015 || we_7007_007_4 || we_7007_007_2 || we_7007_007_3 || we_703002 || we_7004 || we_7005 || we_7009 || we_7010 || we_7011 || we_7013 ||

                     de_9001_002 || de_9008 ||

                     cr_9004_002 || cr_9312_003 || cr_9313_002 || cr_9312 || cr_93121_002 || cr_9312_004 ||

                     adj_64140101_5 || adj_64150001_5 || adj_64150002_5 || adj_64150003_5 || adj_64150004_5 || adj_64150005_5 || adj_64151201_1 || adj_64150901_1 || adj_64150401_1 || adj_64150201_1 || adj_64150101_1 ||

                     rep_9200 || rep_920100_3
                   ">
                    <tr>
                        <th>Description</th>
                        <th>Code</th>
                        <th>Total Amount</th>
                        <th>Amount (Exempt from Tax/ Subject to Fixed/Final Tax)</th>
                        <th>Amount Subject to Normal Tax</th>
                    </tr>
                    </thead>

                        <thead v-else>

                         <tr>
                        <th colspan="5" style="text-align: center; background: red; color: white">Please Enter Some Data </th>
                        </tr>
                        </thead>
                    <tbody>


                    <!-----------------------------------For Property-------------------------------->


                    <tr v-if="pr_2000 || pr_2029 || pr_2001 || pr_2002 || pr_2003 || pr_2099 || pr_2098">
                        <th colspan="5" align="center"> Property</th>
                    </tr>
                    <tr v-if="pr_2000">
                        <td>Income Loss from Property</td>
                        <td>2000</td>
                        <td>{{pr_2000}}</td>
                        <td></td>
                        <td>{{pr_2000}}</td>
                    </tr>

                    <tr v-if="pr_2029">
                        <td>Toal Receipts from Property</td>
                        <td>2029</td>
                        <td>{{pr_2029}}</td>
                        <td></td>
                        <td>{{pr_2029}}</td>
                    </tr>
                    <tr v-if="pr_2001">
                        <td>Rent Recieved or Recievable</td>
                        <td>2001</td>
                        <td>{{pr_2001}}</td>
                        <td></td>
                        <td>{{pr_2001 - exempt_rent}}</td>
                    </tr>
                    <tr v-if="pr_2002">
                        <td>1/10th of amount not adjustabele against rent</td>
                        <td>2002</td>
                        <td>{{pr_2002}}</td>
                        <td></td>
                        <td>{{pr_2002}}</td>
                    </tr>
                    <tr v-if="pr_2003">
                        <td>Forefeited deposit under a contract for sale of property</td>
                        <td>2003</td>
                        <td>{{pr_2003}}</td>
                        <td></td>
                        <td>{{pr_2003}}</td>
                    </tr>
                    <tr v-if="pr_2099">
                        <td>Total Deduction from Property</td>
                        <td>2099</td>
                        <td>{{pr_2099}}</td>
                        <td></td>
                        <td>{{pr_2099}}</td>
                    </tr>
                    <tr v-if="pr_2098">
                        <td>Other deductions against rent</td>
                        <td>2098</td>
                        <td>{{pr_2098}}</td>
                        <td></td>
                        <td>{{pr_2098}}</td>
                    </tr>


                    <!----------------------------------For Salary-------------------------------->


                    <tr v-if="sa_1000 || sa_1089_1 || sa_1089_1a || sa_1089_1a || provident || medical || gratuity
                     || sa_1009 || sa_1049 || sa_1059 || sa_1089 || sa_1099">
                        <th colspan="5">Salary</th>
                    </tr>

                    <tr v-if="sa_1000 || parseInt(sa_1089_1) ||parseInt(sa_1089_1a) || parseInt(sa_1089_1a) || parseInt(provident) ||parseInt(medical)">
                        <td>Income from Salary</td>
                        <td>1000</td>
                        <td>{{sa_1000}}</td>
                        <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical)}}</td>
                        <td>{{parseInt(sa_1000) - (parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical))}}</td>
                    </tr>
                    <tr v-if="sa_1009">
                        <td>Pay wages or other Remuneration (including arrears of salary)</td>
                        <td>1009</td>
                        <td>{{sa_1009}}</td>
                        <td>0</td>
                        <td>{{parseInt(sa_1009)}}</td>
                    </tr>
                    <tr v-if="sa_1049 || medical ">
                        <td>Allowances (Including Flying/Submarine allowance)</td>
                        <td>1049</td>
                        <td>{{sa_1049}}</td>
                        <td>{{medical}}</td>
                        <td>{{parseInt(sa_1049)-parseInt(medical)}}</td>
                    </tr>
                    <tr v-if="sa_1059">
                        <td>Expenditure Reimbursement</td>
                        <td>1059</td>
                        <td>{{sa_1059}}</td>
                        <td>0</td>
                        <td>{{parseInt(sa_1059)}}</td>
                    </tr>
                    <tr v-if="sa_1089 || sa_1089_1a ">
                        <td>Value of Perquisites (including transport Magnetization for Civil Servants)</td>
                        <td>1089</td>
                        <td>{{sa_1089}}</td>
                        <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a)}}</td>
                        <td>{{parseInt(sa_1089) - parseInt(sa_1089_1) + parseInt(sa_1089_1a)}}</td>
                    </tr>
                    <tr v-if="sa_1099 || gratuity || provident">
                        <td>Profits in Lieu of or in addition to pay, wages or other remuneration (including employement Termination Benefits</td>
                        <td>1099</td>
                        <td>{{sa_1099}}</td>
                        <td>{{parseInt(gratuity) + parseInt(provident)}}</td>
                        <td>{{parseInt(sa_1099) - parseInt(gratuity) + parseInt(provident)}}</td>
                    </tr>


                    <!------------------------------------------other sources--------------------------------------->


                    <tr v-if="oth_5003041_1 || we_7006_010 || we_7006_007 || oth_5028 || sa_1000_601 || oth_5089 || oth_5088">
                        <th colspan="5">Other Sources</th>
                    </tr>

                    <tr v-if="oth_5003041_1 || we_7006_010 || we_7006_007 || oth_5028 || sa_1000_601 || oth_5089">
                        <td>Income / (Loss) from Other Sources</td>
                        <td>5000</td>
                        <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_007) + parseInt(oth_5028) + parseInt(sa_1000_601) -
                            parseInt(oth_5089)}}
                        </td>

                        <td>{{parseInt(we_7006_010) + parseInt(we_7006_007)}}</td>

                        <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) - parseInt(oth_5089)}}</td>
                    </tr>

                    <tr v-if="oth_5003041_1 || we_7006_010 || we_7006_007 || oth_5028 || sa_1000_601 || oth_5089">
                    <td>Receipts from Other Sources</td>
                        <td>5029</td>
                        <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_007) + parseInt(oth_5028) + parseInt(sa_1000_601) }}</td>
                        <td>{{parseInt(we_7006_010) + parseInt(we_7006_007)}}</td>
                        <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) }}</td>
                    </tr>

                    <tr v-if="oth_5003041_1">
                        <td>Yield on Behbood Certificates / Pensioner's Benefit Account / Shuhada Family Benefit Account</td>
                        <td>5003041</td>
                        <td>{{oth_5003041_1}}</td>
                        <td>0</td>
                        <td>{{oth_5003041_1 - 0}}</td>
                    </tr>

                    <tr v-if="we_7006_010 || we_7006_007">
                        <td>Profit on Debt (Interest, Yield, etc)</td>
                        <td>5003</td>
                        <td>{{parseInt(we_7006_010) + parseInt(we_7006_007)}}</td>
                        <td>{{parseInt(we_7006_010) + parseInt(we_7006_007)}}</td>
                        <td>0</td>
                    </tr>

                    <tr v-if="oth_5028">
                        <td>Other Receipts</td>
                        <td>5028</td>
                        <td>{{oth_5028}}</td>
                        <td>0</td>
                        <td>{{oth_5028 - 0}}</td>
                    </tr>

                    <tr v-if="sa_1000_601">
                        <td>Annuity / Pension</td>
                        <td>5007</td>
                        <td>{{sa_1000_601}}</td>
                        <td></td>
                        <td>{{sa_1000_601 - 0}}</td>
                    </tr>

                    <tr v-if="oth_5088">
                        <td>Deduction From Other Sources</td>
                        <td>5089</td>
                        <td>{{oth_5088}}</td>
                        <td></td>
                        <td>{{oth_5088 - 0}}</td>
                    </tr>

<!--                    <tr>-->
<!--                        <td>Other Deductions</td>-->
<!--                        <td>5088</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->


                    <!------------------------------------AGRICULTURE--------------------------------->


                    <tr v-if="oth_6100_002">
                        <th colspan="5">Agriculture</th>
                    </tr>

                    <tr v-if="oth_6100_002">
                        <td>Agriculture Income</td>
                        <td>6100</td>
                        <td>{{oth_6100_002}}</td>
                        <td>{{oth_6100_002}}</td>
                        <td>{{oth_6100_002 - oth_6100_002}}</td>

                    </tr>
                    <!--<tr>
                        <td>Agriculture Income Tax</td>
                        <td>9291</td>
                        <td>{{oth_9291}}</td>

                    </tr>-->

                    <!---------------------------------------Foreign Income-------------------------->

                    <tr v-if="oth_6000_002 || oth_6000_003">
                        <th colspan="5">Foreign Income</th>
                    </tr>
                    <tr v-if="oth_6000_002 || oth_6000_003">
                        <td>Foreign Income</td>
                        <td>6000</td>
                        <td>{{oth_6000_002}}</td>
                        <td>{{oth_6000_003}}</td>
                        <td>{{oth_6000_002 - oth_6000_003}}</td>
                    </tr>

                    <!----------------------------------Deduction--------------------------------->

                      <tr v-if="rep_9009_1 || de_9001_002 || de_9008 || cr_9004_002 ">
                        <th colspan="5">Deduction</th>
                      </tr>

                    <tr v-if="rep_9009_1">
                        <td>Deductable Allowance</td>
                        <td>9009</td>
                        <td>{{rep_9009_1}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-if="de_9001_002">
                        <td>Zakat u/s 60</td>
                        <td>9001</td>
                        <td>{{de_9001_002}}</td>
                        <td></td>
                        <td></td>
                    </tr>
<!--                    <tr>-->
<!--                        <td>Profit on debt etc u/s 60C</td>-->
<!--                        <td>9007</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->

                    <tr v-if="de_9008">
                        <td>Educational Expenses u/s 60D</td>
                        <td>9008</td>
                        <td>{{de_9008}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-if="cr_9004_002">
                        <td>charitable donation u/c 61, part 1, 2nd schedule</td>
                        <td>9004</td>
                        <td>{{cr_9004_002}}</td>
                        <td></td>
                        <td></td>
                    </tr>


                    <!-----------------------------Tax Reduction for teacher and researcher------------------------>


<!--                    <tr>-->
<!--                        <th colspan="5">Tax reduction for teacher and reasearcher</th>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Tax Reduction</td>-->
<!--                        <td>9030</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Tax Reduction for full time teacher/researcher</td>-->
<!--                        <td>9302</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Tax Reduction for Foreign film maker</td>-->
<!--                        <td>9305</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->

                    <!-------------------------------------------Tax Credit----------------------------------->

                    <tr v-if="rep_9329_1 || cr_9312 || cr_93121_002 || cr_9313_002 || oth_6000_004 ">
                        <th colspan="5">Credit</th>
                    </tr>

                    <tr v-if="rep_9329_1">
                        <td>Tax Credits</td>
                        <td>9329</td>
                        <td>{{rep_9329_1}}</td>
                        <td></td>
                        <td></td>
                    </tr>
<!--                    <tr>-->
<!--                        <td>Tax Credit for charitable Donations u/s 60</td>-->
<!--                        <td>9311</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
                    <tr v-if="cr_9312">
                        <td>Tax Credit for investment in shares, sukkuks and life insurance premium</td>
                        <td>9312</td>
                        <td>{{cr_9312}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-if="cr_93121_002">
                        <td>Tax Credit for investment in Health Insurance u/s 62A</td>
                        <td>93121</td>
                        <td>{{cr_93121_002}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-if="cr_9313_002">
                        <td>Tax Credit for Contribution to Approved Pension Fund u/s 63</td>
                        <td>9313</td>
                        <td>{{cr_9313_002}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-if="oth_6000_004">
                        <td>Tax Credit u/s 103</td>
                        <td>9320</td>
                        <td>{{oth_6000_004}}</td>
                        <td></td>
                        <td></td>
                    </tr>


                    <!--------------------------------Adjustable Tax-------------------->


                    <tr v-if="parseInt(rep_640000) || sa_1000_900 || we_7006_012 || we_7006_013 || we_7007_007_1
                    || we_7007_008_1 || we_7007_009_1 || we_7007_010_1 || we_7007_011_1 || adj_64140101_5
                    || adj_64150001_5 || adj_64150002_5 || adj_64150003_5 || adj_64150004_5 || adj_64150005_5
                    || adj_64150201_1 || pr_64150301 || pr_64150302 || pr_64150303 || adj_64150401_1
                    || adj_64150901_1 || pr_64151101 || adj_64151201_1 || we_7006_014 || we_7006_015
                    || cr_9312_004 || we_7006_016">
                        <th colspan="5">Adjustable Tax</th>
                    </tr>
<!--                    <tr v-else>-->
<!--                        <th colspan="5">No Result</th>-->
<!--                    </tr>-->

                    <tr v-if="parseInt(rep_640000)">
                        <td>Adjustable Tax</td>
                        <td>640000</td>
                        <td></td>
                        <td>{{parseInt(rep_640000)}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="sa_1000_002==='federal' && sa_1000_900">
                        <td>Salary of Federal Government Employees u/s 149</td>
                        <td>64020001</td>
                        <td>
                            <span v-if="sa_1000_002==='federal'">{{sa_1000_900}}</span>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="sa_1000_002==='provincial' && sa_1000_900">
                        <td>Salary of Provincial Government Employees u/s 149</td>
                        <td>64020002</td>
                        <td><span v-if="sa_1000_002==='provincial'">{{sa_1000_900}}</span></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="sa_1000_002==='corporate' || sa_1000_002==='listed' && sa_1000_900">
                        <td>Salary of Corporate Sector Employees u/s 149</td>
                        <td>64020003</td>
                        <td><span v-if="sa_1000_002==='corporate' || sa_1000_002==='listed'">{{sa_1000_900}}</span></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="sa_1000_002==='other' && sa_1000_900">
                        <td>Salary of Other Employees u/s 149</td>
                        <td>64020004</td>
                        <td><span v-if="sa_1000_002==='other'">{{sa_1000_900}}</span></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

<!--                    <tr>-->
<!--                        <td>Directorship Fee u/s 149(3)</td>-->
<!--                        <td>64020005</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Withdrawal from Pension Fund u/s 156B</td>-->
<!--                        <td>64090201</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                     </tr>-->

                     <tr v-if="we_7006_012">
                        <td>Cash Withdrawal from Bank u/s 231A</td>
                        <td>64100101</td>
                        <td></td>
                        <td>{{we_7006_012}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7006_013">
                        <td>Certain Banking Transactions u/s 231AA</td>
                        <td>64100201</td>
                        <td></td>
                        <td>{{we_7006_013}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7007_007_1">
                        <td>Motor Vehicle Registration Fee u/s 231B(1)</td>
                        <td>64100301</td>
                        <td></td>
                        <td>{{we_7007_007_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7007_008_1">
                        <td>Motor Vehicle Transfer Fee u/s 231B(2)</td>
                        <td>64100302</td>
                        <td></td>
                        <td>{{we_7007_008_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7007_009_1">
                        <td>Motor Vehicle Sale u/s 231B(3)</td>
                        <td>64100303</td>
                        <td></td>
                        <td>{{we_7007_009_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7007_010_1">
                        <td>Motor Vehicle Leasing u/s 231B(1A) @4%</td>
                        <td>64100304</td>
                        <td></td>
                        <td>{{we_7007_010_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

<!--                    <tr>-->
<!--                        <td>Goods Transport Public Vehicle Tax u/s 234</td>-->
<!--                        <td>64130001</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
                    <tr v-if="we_7007_011_1">
                        <td>Private Vehicle Tax u/s 234</td>
                        <td>64130003</td>
                        <td></td>
                        <td>{{we_7007_011_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64140101_5">
                        <td>Electricity Bill of Domestic Consumer u/s 235A</td>
                        <td>64140101</td>
                        <td></td>
                        <td>{{adj_64140101_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150001_5">
                        <td>Telephone Bill u/s 236(1)(a)</td>
                        <td>64150001</td>
                        <td></td>
                        <td>{{adj_64150001_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150002_5">
                        <td>Cellphone Bill u/s 236(1)(a)</td>
                        <td>64150002</td>
                        <td></td>
                        <td>{{adj_64150002_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150003_5">
                        <td>Prepaid Telephone Card u/s 236(1)(b)</td>
                        <td>64150003</td>
                        <td></td>
                        <td>{{adj_64150003_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150004_5">
                        <td>Phone Unit u/s 236(1)(c)</td>
                        <td>64150004</td>
                        <td></td>
                        <td>{{adj_64150004_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150005_5">
                        <td>Internet Bill u/s 236(1)(d)</td>
                        <td>64150005</td>
                        <td></td>
                        <td>{{adj_64150005_5}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150101_1">
                        <td>Purchase by Auction u/s 236A</td>
                        <td>64150101</td>
                        <td></td>
                        <td>{{adj_64150101_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>
                    <tr v-if="adj_64150201_1">
                        <td>Domestic Air Ticket Charges u/s 236B</td>
                        <td>64150201</td>
                        <td></td>
                        <td>{{adj_64150201_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="pr_64150301">
                        <td>Sale / Transfer of Immovable Property u/s 236C</td>
                        <td>64150301</td>
                        <td></td>
                        <td>{{pr_64150301}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="pr_64150302">
                        <td>Tax Deducted u/s 236C where property purchased & sold within Tax Year</td>
                        <td>64150302</td>
                        <td></td>
                        <td>{{pr_64150302}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="pr_64150303">
                        <td>Tax Deducted u/s 236C where property purchased prior to current Tax Year</td>
                        <td>64150303</td>
                        <td></td>
                        <td>{{pr_64150303}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150401_1">
                        <td>Functions / Gatherings Charges u/s 236D</td>
                        <td>64150401</td>
                        <td></td>
                        <td>{{adj_64150401_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64150901_1">
                        <td>Educational Institution Fee u/s 236I</td>
                        <td>64150901</td>
                        <td></td>
                        <td>{{adj_64150901_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="pr_64151101">
                        <td>Purchase / Transfer of Immovable Property u/s 236K</td>
                        <td>64151101</td>
                        <td></td>
                        <td>{{pr_64151101}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="adj_64151201_1">
                        <td>Purchase of International Air Ticket u/s 236L</td>
                        <td>64151201</td>
                        <td></td>
                        <td>{{adj_64151201_1}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7006_014">
                        <td>Banking transactions otherwise than through cash u/s 236P</td>
                        <td>64151501</td>
                        <td></td>
                        <td>{{we_7006_014}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <tr v-if="we_7006_015">
                        <td>Education related expenses remitted abroad u/s 236R</td>
                        <td>64151701</td>
                        <td></td>
                        <td>{{we_7006_015}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

<!--                    <tr>-->
<!--                        <td>General insurance premium u/s 236U</td>-->
<!--                        <td>64151902</td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                        <td></td>-->
<!--                    </tr>-->


                    <tr v-if="cr_9312_004">
                        <td>Life insurance premium u/s 236U</td>
                        <td>64151903</td>
                        <td></td>
                        <td>{{cr_9312_004}}</td>
                        <td></td>
                    </tr>
                <tr v-else></tr>

                    <tr v-if="we_7006_016">
                        <td>Persons remitting amount abroad through credit / debits / prepaid cards u/s 236Y</td>
                        <td>64151905</td>
                        <td></td>
                        <td>{{we_7006_016}}</td>
                        <td></td>
                    </tr>
                    <tr v-else></tr>

                    <!--------------------------------------------Computations-------------------------------------->
                    <tr v-if="sa_1000 || sa_1089_1a || sa_1089_1a || provident || medical || pr_2000  ||
                    oth_5003041_1 || we_7006_010 || we_7006_007 || oth_5028 || sa_1000_601 || oth_5089 ||
                     oth_6000_002 || oth_6000_003 || oth_6100_002 || rep_6000_1 || rep_6000_2 || rep_6000_3 ||
                     de_9001_002 || de_9008 || cr_9004_002 || rep_9100_1 || rep_9100_2 || rep_9100_3 || rep_920000 ||
                     rep_920100_3 || rep_9309_3 || rep_920100_3 || rep_9309_3 || rep_9329_1 || rep_640000 || rep_9203 ||
                      rep_9210">
                        <th colspan="5">Computations</th>
                    </tr>
                    <tr v-if="sa_1000 || sa_1089_1a || sa_1089_1a || provident || medical">
                        <td>Income from salary</td>
                        <td>1000</td>
                        <td>{{sa_1000}}</td>
                        <td>{{parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(sa_1089_1a) + parseInt(provident) + parseInt(medical)}}</td>
                        <td>{{parseInt(sa_1000) - (parseInt(sa_1089_1) + parseInt(sa_1089_1a) + parseInt(gratuity) + parseInt(provident) + parseInt(medical))}}</td>
                    </tr>
                    <tr v-if="pr_2000">
                        <td>Income/ (Loss) from Property</td>
                        <td>2000</td>
                        <td>{{pr_2000}}</td>
                        <td></td>
                        <td>{{pr_2000}}</td>
                    </tr>
                    <tr v-if="oth_5003041_1 || we_7006_010 || we_7006_007 || oth_5028 || sa_1000_601 || oth_5089 ">
                        <td>Income / (Loss) from other sources</td>
                        <td>5000</td>
                        <td>{{ parseInt(oth_5003041_1) + parseInt(we_7006_010) + parseInt(we_7006_007) + parseInt(oth_5028) + parseInt(sa_1000_601) -
                            parseInt(oth_5089)}}
                        </td>

                        <td>{{parseInt(we_7006_010) + parseInt(we_7006_007)}}</td>

                        <td>{{ parseInt(oth_5003041_1) + parseInt(oth_5028) + parseInt(sa_1000_601) - parseInt(oth_5089)}}</td>
                    </tr>
                    <tr v-if="oth_6000_002 || oth_6000_003 ">
                        <td>Foreign Income</td>
                        <td>6000</td>
                        <td>{{oth_6000_002}}</td>
                        <td>{{oth_6000_003}}</td>
                        <td>{{oth_6000_002 - oth_6000_003}}</td>
                    </tr>
                    <tr v-if="oth_6100_002 ">
                        <td>Agriculture Income</td>
                        <td>6100</td>
                        <td>{{oth_6100_002}}</td>
                        <td>{{oth_6100_002}}</td>
                        <td>{{oth_6100_002 - oth_6100_002}}</td>
                    </tr>
                    <tr v-if="rep_6000_1 || rep_6000_2 || rep_6000_3 ">
                        <td>Total Income</td>
                        <td>9000</td>
                        <td>{{rep_6000_1}}</td>
                        <td>{{rep_6000_2}}</td>
                        <td>{{rep_6000_3}}</td>
                    </tr>
                    <tr v-if="de_9001_002 || de_9008 || cr_9004_002 ">
                        <td>Deductible allowances</td>
                        <td>9009</td>
                        <td>{{parseInt(de_9001_002) + parseInt(de_9008) + parseInt(cr_9004_002)}}</td>
                        <td>0</td>
                        <td>{{parseInt(de_9001_002) + parseInt(de_9008) + parseInt(cr_9004_002)}}</td>
                    </tr>
                    <tr v-if= "rep_9100_1 || rep_9100_2 || rep_9100_3">
                        <td>Taxable Income</td>
                        <td>9100</td>
                        <td>{{rep_9100_1}}</td>
                        <td>{{rep_9100_2}}</td>
                        <td>{{rep_9100_3}}</td>
                    </tr>
                    <tr v-if="rep_920000 || rep_920100_3 || rep_9309_3 ">
                        <td>Tax Chargeable</td>
                        <td>9200</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_920000 + rep_920100_3 - rep_9309_3}}</td>
                    </tr>
                    <tr v-if="rep_920000">
                        <td>Normal Income Tax</td>
                        <td>920000</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_920000}}</td>
                    </tr>
                    <tr v-if="rep_920100_3">
                        <td>Final/Fixed/Minimum/Average/Relevant/Reduced income Tax</td>
                        <td>920100</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_920100_3}}</td>
                    </tr>
                    <tr v-if="rep_9309_3">
                        <td>tax reductions</td>
                        <td>9309</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_9309_3}}</td>
                    </tr>
                    <tr v-if="rep_9329_1">
                        <td>Tax Credits</td>
                        <td>9329</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_9329_1}}</td>
                    </tr>
                    <tr v-if="rep_640000">
                        <td>Withholding Income Tax</td>
                        <td>9201</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_640000}}</td>
                    </tr>
                    <tr v-if="rep_9203">
                        <td>Admitted Income Tax</td>
                        <td>9203</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_9203}}</td>
                    </tr>
                    <tr v-if="rep_9210">
                        <td>Refundable Income Tax</td>
                        <td>9210</td>
                        <td></td>
                        <td></td>
                        <td>{{rep_9210}}</td>
                    </tr>
                    </tbody>
                    </table>

                </b-tab>
                <b-tab title="Wealth">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Total Amount</th>
<!--                            <th>Amount (Exempt from Tax/ Subject to Fixed/Final Tax)</th>-->
<!--                            <th>Amount Subject to Normal Tax</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <!--Personal Assets/Liabilities-->
<!--                        {{this.pr_2000_002s}}-->
                        <tr>
                            <th colspan="5">Personal Assets/Liabilities</th>
                        </tr>

                          <tr>
<!--                              {{pr_2000_002s}}-->
                            <td>Agricultural Property</td>
                            <td>7001</td>
                              <td><strong>{{agri_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(ag, key) in agriculture()">
                            <td> Type = {{ag.pr_2000_002}}, Marla = {{ag.pr_2000_003}}, Address = {{ag.pr_2000_004}}, City = {{ag.pr_2000_005}},</td>
                            <td>7001_{{key+1}}</td>
                            <td>{{ag.pr_2000_102}}</td>
                        </tr>


                        <tr>
                            <td>Commercial, Industrial, Residential Property (Non-Business)</td>
                            <td>7002</td>
                            <td><strong>{{other_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(oth, key) in other_property()">
                            <td> Type = {{oth.pr_2000_002}}, Marla = {{oth.pr_2000_003}}, Address = {{oth.pr_2000_004}}, City = {{oth.pr_2000_005}},</td>
                            <td>7002_{{key+1}}</td>
                            <td>{{oth.pr_2000_102}}</td>
                        </tr>

<!--                        <tr>-->
<!--                            <td>Business Capital</td>-->
<!--                            <td>7003</td>-->
<!--                            <td></td>-->
<!--&lt;!&ndash;                            <td></td>&ndash;&gt;-->
<!--&lt;!&ndash;                            <td></td>&ndash;&gt;-->
<!--                        </tr>-->
                        <tr>
                            <td>Equipment (Non-Business)</td>
                            <td>7004</td>
                            <td>{{we_7004}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Animal (Non-Business)</td>
                            <td>7005</td>
                            <td>{{we_7005}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                         <tr>
                            <td>Investment (Non-Business) (Account / Annuity / Bond / Certificate / Debenture / Deposit / Fund / Instrument / Policy / Share / Stock /
                                Unit, etc.)
                            </td>
                            <td>7006</td>
                             <td><strong>{{account_sum}}</strong></td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr v-for="(acc, key) in account()">
                            <td>Investment (Non-Business) (Account / Annuity / Bond / Certificate / Debenture / Deposit / Fund / Instrument / Policy / Share / Stock /
                                Unit, etc.)<br>{{acc.we_7006_003}} - {{acc.selectedOption}} - {{acc.we_7006_006}} - {{acc.we_7006_007}}
                            </td>
                            <td>7006_{{key+1}}</td>
                            <td>{{acc.we_7006_008}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Debt (Non-Business) (Advance / Debt / Deposit / Prepayment / Receivable / Security)</td>
                            <td>7007</td>
                            <td><strong>{{loan_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(loan,index) in loan()">
                            <td>Debt (Non-Business) (Advance / Debt / Deposit / Prepayment / Receivable / Security)</td>
                            <td>7007_{{index+1}}</td>
                            <td>{{loan.we_7007_105}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr>
                            <td>Motor Vehicle (Non-Business)</td>
                            <td>7008</td>
                            <td><strong>{{vehicle_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(veh,index) in vehicle()">
                            <td>Motor Vehicle (Non-Business)</td>
                            <td>7008_{{index+1}}</td>
                            <td>{{veh.we_7007_price}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr>
                            <td>Precious Possession</td>
                            <td>7009</td>
                            <td>{{we_7009}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Household Effect</td>
                            <td>7010</td>
                            <td>{{we_7010}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Personal Item
                            </td>
                            <td>7011</td>
                            <td>{{we_7011}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Cash (Non-Business)</td>
                            <td>7012</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Any Other Asset</td>
                            <td>7013</td>
                            <td>{{we_7013}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Assets in Others' Name</td>
                            <td>7014</td>
                            <td><strong>{{asset_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(ass,index) in asset()">
                            <td>Assets for other's Name = {{ass.we_7014_005}} - {{ass.we_7014_006}}</td>
                            <td>7014_{{index+1}}</td>
                            <td>{{ass.we_7014_003}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr>

                            <td>Total Assets inside Pakistan</td>
                            <td>7015</td>
                            <td>
                                {{
                                  parseInt(agri_sum) + parseInt(other_sum) + parseInt(we_7004)  + parseInt(we_7005) +
                                  parseInt(account_sum) + parseInt(loan_sum) + parseInt(vehicle_sum) + parseInt(we_7009)+
                                  parseInt(we_7010) + parseInt(we_7011) + parseInt(we_7013) + parseInt(asset_sum)
                                }}
                            </td>


<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Assets held outside Pakistan</td>
                            <td>7016</td>
                            <td><strong>{{outer_asset_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(out_asset,index) in outerAsset()">
                            <td>Assets held outside Pakistan</td>
                            <td>7016_{{index + 1 }}</td>
                            <td>{{out_asset.we_7016_005}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr>
                            <td>Capital or voting rights in foreign company</td>
                            <td>7018</td>
                            <td><strong>{{outer_company_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(outer_companies,index) in outerCompany()">
                            <td>Capital or voting rights in foreign company</td>
                            <td>7018_{{index + 1}}</td>
                            <td>{{outer_companies.we_7018_007}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr >
                            <td>Total Assets held outside pakistan</td>
                            <td>7020</td>
                            <td>{{parseInt(outer_asset_sum) + parseInt(outer_company_sum)}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr style="background: #edb600; color: black;">
                            <td><strong> Total Assets</strong></td>
                            <td><strong>7019</strong></td>
                            <td>
                                <strong>
                                {{parseInt(agri_sum) + parseInt(other_sum) + parseInt(we_7004)  + parseInt(we_7005) +
                                parseInt(account_sum) + parseInt(loan_sum) + parseInt(vehicle_sum) + parseInt(we_7009)+
                                parseInt(we_7010) + parseInt(we_7011) + parseInt(we_7013) + parseInt(asset_sum) +
                                parseInt(outer_asset_sum) + parseInt(outer_company_sum) }}
                                </strong>
                             </td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Credit (Non-Business) (Advance / Borrowing / Credit / Deposit / Loan / Mortgage / Overdraft / Payable)</td>
                            <td>7021</td>
                            <td><strong>{{payable_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        <tr v-for="(pay_able,index) in payable()">
                            <td>Credit (Non-Business) (Advance / Borrowing / Credit / Deposit / Loan / Mortgage / Overdraft / Payable)</td>
                            <td>7021_{{index + 1}}</td>
                            <td>{{pay_able.we_7021_005}}</td>
                            <!--                            <td></td>-->
                            <!--                            <td></td>-->
                        </tr>

                        <tr>
                            <td>Total Liabilities</td>
                            <td>7029</td>
                            <td><strong>{{payable_sum}}</strong></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>

                        </tbody>
                    </table>
                </b-tab>
                <b-tab title="Reconcellation">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Total Amount</th>
<!--                            <th>Amount (Exempt from Tax/ Subject to Fixed/Final Tax)</th>-->
<!--                            <th>Amount Subject to Normal Tax</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <!--Personal Expenses-->

                        <tr>
                            <th colspan="3">Personal Expenses</th>
                        </tr>
                        <tr>

                            <td>Personal Expenses</td>
                            <td>7089</td>
                            <td>
                        <strong>
                            {{
                                parseInt(we_7051) + parseInt(we_7052) +parseInt(we_7055) +parseInt(we_7056) +
                                parseInt(we_7058) +parseInt(we_7059) +parseInt(we_7060) +parseInt(we_7061) +
                                parseInt(we_7066) +parseInt(we_7070) +parseInt(we_7071) +parseInt(we_7072) +
                                parseInt(we_7073) +parseInt(we_7076) +parseInt(we_7087) +parseInt(we_7088)

                             }}
                        </strong>
                            </td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Rent</td>
                            <td>7051</td>
                            <td>{{we_7051}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Rates / Taxes / Charge / Cess</td>
                            <td>7052</td>
                            <td>{{we_7052}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Vehicle Running / Maintenence</td>
                            <td>7055</td>
                            <td>{{we_7055}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Travelling</td>
                            <td>7056</td>
                            <td>{{we_7056}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Electricity</td>
                            <td>7058</td>
                            <td>{{we_7058}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Water


                            </td>
                            <td>7059</td>
                            <td>{{we_7059}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Gas</td>
                            <td>7060</td>
                            <td>{{we_7060}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>7061</td>
                            <td>{{we_7061}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Asset Insurance / Security</td>
                            <td>7066</td>
                            <td>{{we_7066}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Medical
                            </td>
                            <td>7070</td>
                            <td>{{we_7070}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Educational</td>
                            <td>7071</td>
                            <td>{{we_7071}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Club</td>
                            <td>7072</td>
                            <td>{{we_7072}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Functions / Gatherings</td>
                            <td>7073</td>
                            <td>{{we_7073}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Donation, Zakat, Annuity, Profit on Debt, Life Insurance Premium, etc.</td>
                            <td>7076</td>
                            <td>{{we_7076}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Other Personal / Household Expenses</td>
                            <td>7087</td>
                            <td>{{we_7087}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Contribution in Expenses by Family Members</td>
                            <td>7088</td>
                            <td>{{we_7088}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>


                        <!--Reconciliation of Net Profit-->
                        <tr>
                            <th colspan="3">Reconciliation of Net Profit</th>
                        </tr>
                        <tr>
                            <td>Net Assets Current Year</td>
                            <td>703001</td>
                            <td>
                                <!--..........................Total Assets - Total Liablities ...................-->

                                {{ rep_703001 }}

                            </td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Net Assets Previous Year</td>
                            <td>703002</td>
                            <td>{{parseInt(we_703002)}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Increase / Decrease in Assets</td>
                            <td>703003</td>
                            <td>{{parseInt(we_703002) - rep_703001}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Inflows</td>
                            <td>7049</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Income Declared as per Return for the year subject to Normal Tax</td>
                            <td>7031</td>
                            <td>{{rep_9100_3}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Income Declared as per Return for the year Exempt from Tax</td>
                            <td>7032</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Income Attributable to Receipts, etc. Declared as per Return for the year subject to Final / Fixed Tax</td>
                            <td>7033</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Adjustments in Income Declared as per Return for the year</td>
                            <td>7034</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Foreign Remittance</td>
                            <td>7035</td>
                            <td>{{we_7006_009}}</td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Inheritance</td>
                            <td>7036</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Gift</td>
                            <td>7037</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Gain on Disposal of Assets, excluding Capital Gain on Immovable Property</td>
                            <td>7038</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Others</td>
                            <td>7048</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Outflows</td>
                            <td>7099</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Personal Expenses</td>
                            <td>7089</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Gift</td>
                            <td>7091</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Others</td>
                            <td>7098</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Loss on Disposal of Assets</td>
                            <td>7092</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Unreconciled Amount</td>
                            <td>703000</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        <tr>
                            <td>Assets Transferred / Sold / Gifted / Donated during the year</td>
                            <td>703004</td>
                            <td></td>
<!--                            <td></td>-->
<!--                            <td></td>-->
                        </tr>
                        </tbody>
                    </table>
                </b-tab>
            </b-tabs>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Report',
        // props: 'pr_2000_002s',
        data() {
            return {

                result: null,
                agri: "",
                other: "",
                account_info: "",
                account_sum: "",
                vehicle_info: "",
                vehicle_sum:"",
                 loan_info: "",
                loan_sum: "",
                asset_info: "",
                asset_sum: "",
                outer_asset: "",
                outer_asset_sum:"",
                outer_company_info: "",
                outer_company_sum:"",
                payable_info: "",
                payable_sum: "",
                year: 2019,
                exempt_rent: 0,
                gratuity: 0,
                provident: 0,
                medical: 0,
                agri_sum:0,
                other_sum:0,

                pr_2001: 0, pr_2003: 0, pr_2031: 0, pr_2032: 0, pr_2033: 0, pr_2098: 0, pr_2099: 0, pr_2000: 0, pr_2002: 0, pr_2029: 0, pr_64150301: 0, pr_64151101: 0, pr_64150302: 0, pr_64150303: 0,

                sa_1000: 0, sa_1009: 0, sa_1049: 0, sa_1059: 0, sa_1089: 0, sa_1089_1: 0, sa_1089_1a: 0, sa_1089_per: 0, sa_1099: 0, sa_1000_002: 0, sa_1000_601: 0, sa_1000_901: 0, sa_1000_007: 0, sa_1000_008: 0, sa_1000_900: 0,

                oth_5003041_1: 0, oth_5028: 0, oth_5088: 0, oth_5089: 0, oth_6000_002: 0, oth_6000_003: 0, oth_6000_004: 0, oth_6100_002: 0, oth_9100: 0,

                we_7006_010: 0, we_7006_007: 0, we_7006_012: 0, we_7006_013: 0, we_7007_007_1: 0, we_7007_008_1: 0, we_7007_009_1: 0, we_7007_010_1: 0, we_7007_011_1: 0, we_7006_016: 0, we_7006_014: 0, we_7006_015: 0, we_7007_007_4: 0, we_7007_007_2: 0, we_7007_007_3: 0, we_703002: 0, we_7004: 0, we_7005: 0, we_7009: 0, we_7010: 0, we_7011: 0, we_7013: 0,

                we_7051:0,we_7052:0,we_7055:0,we_7056:0,we_7058:0,we_7059:0,we_7060:0,we_7061:0,we_7066:0,

                we_7070:0,we_7071:0,we_7072:0,we_7073:0,we_7076:0,we_7087:0,we_7088:0,

                 de_9001_002: 0, de_9008: 0,

                cr_9004_002: 0, cr_9312_003: 0, cr_9313_002: 0, cr_9312: 0, cr_93121_002: 0, cr_9312_004: 0,

                adj_64140101_5: 0, adj_64150001_5: 0, adj_64150002_5: 0, adj_64150003_5: 0, adj_64150004_5: 0, adj_64150005_5: 0, adj_64151201_1: 0, adj_64150901_1: 0, adj_64150401_1: 0, adj_64150201_1: 0, adj_64150101_1: 0,

                rep_9200: 0, rep_920100_3: 0, we_7006_009:0
            }
        },
        computed: {

            rep_640000() {
                return parseInt(this.sa_1000_900) + parseInt(this.pr_64150301) + parseInt(this.pr_64150302) + parseInt(this.pr_64150303) + parseInt(this.pr_64151101) + parseInt(this.cr_9312_004) + parseInt(this.we_7007_011_1) + parseInt(this.we_7006_012) + parseInt(this.we_7006_013) + parseInt(this.we_7007_007_1) + parseInt(this.we_7007_007_2) + parseInt(this.we_7007_007_3) + parseInt(this.we_7007_007_4) + parseInt(this.we_7006_014) + parseInt(this.we_7006_015) + parseInt(this.we_7006_016) + parseInt(this.adj_64140101_5) + parseInt(this.adj_64150001_5) + parseInt(this.adj_64150002_5) + parseInt(this.adj_64150003_5) + parseInt(this.adj_64150004_5) + parseInt(this.adj_64150005_5) + parseInt(this.adj_64151201_1) + parseInt(this.adj_64150901_1) + parseInt(this.adj_64150401_1) + parseInt(this.adj_64150201_1) + parseInt(this.adj_64150101_1);
            },

            rep_6000_1() {
                return parseInt(this.sa_1000) + parseInt(this.pr_2000) + parseInt(this.oth_5003041_1) + parseInt(this.we_7006_010) + parseInt(this.we_7006_007) + parseInt(this.oth_5028) + parseInt(this.sa_1000_601) -
                    parseInt(this.oth_5089) + parseInt(this.oth_6000_002) + parseInt(this.oth_6100_002);
            }
            ,
            rep_6000_2() {
                return parseInt(this.sa_1089_1) + parseInt(this.sa_1089_1a) + parseInt(this.gratuity) + parseInt(this.provident) + parseInt(this.medical) + parseInt(this.we_7006_010) + parseInt(this.we_7006_007) + parseInt(this.oth_6000_003) + parseInt(this.oth_6100_002);
            }
            ,
            rep_6000_3() {
                return parseInt(this.sa_1000) - parseInt(this.sa_1089_1) + parseInt(this.sa_1089_1a) + parseInt(this.gratuity) + parseInt(this.provident) + parseInt(this.medical) + parseInt(this.oth_5003041_1) + parseInt(this.oth_5028) + parseInt(this.sa_1000_601) - parseInt(this.oth_5089) + parseInt(this.oth_6000_002) - parseInt(this.oth_6000_003) + parseInt(this.oth_6100_002) - parseInt(this.oth_6100_002) + parseInt(this.pr_2000);
            }
            ,
            rep_9100_1() {
                return parseInt(this.rep_6000_1) - parseInt(this.de_9001_002) + parseInt(this.de_9008) + parseInt(this.cr_9004_002);
            }
            ,
            rep_9100_2() {
                return parseInt(this.rep_6000_2);
            }
            ,
            rep_9100_3() {
                return parseInt(this.rep_6000_3) - parseInt(this.de_9001_002) + parseInt(this.de_9008) + parseInt(this.cr_9004_002)
            }
            ,

            rep_920000() {
                if (((parseInt(this.sa_1000) / parseInt(this.rep_9100_3)) * 100) >= 50) {
                    return this.calculateTaxForSalary(parseInt(this.rep_9100_3));
                } else {
                    return this.calculateTaxForNonSalary(parseInt(this.rep_9100_3));
                }
            }
            ,

            rep_9329_1() {
                return parseInt(this.oth_6000_004) + parseInt(this.cr_9313_002) + parseInt(this.cr_93121_002) + parseInt(this.cr_9312);
            }
            ,
            rep_9200_3() {
                return parseInt(this.rep_920000) + parseInt(this.rep_920100_3) - parseInt(this.rep_9309_3) ;
            }
            ,

            rep_9309_3() {
                if (this.sa_1000_008 === '1' || this.sa_1000_007 === '1') {
                    return Math.round(parseInt(this.rep_920000) * (40 / 100));
                }
                else
                    return 0;
            }
            ,
            rep_9203() {
                if (parseInt(this.rep_920000) - parseInt(this.rep_9309_3) - parseInt(this.rep_9329_1) - parseInt(this.rep_640000) > 0)
                    return parseInt(this.rep_920000) - parseInt(this.rep_9309_3) - parseInt(this.rep_9329_1) - parseInt(this.rep_640000);
                else
                    return 0;
            }
            ,

            rep_9210() {
                if (parseInt(this.rep_920000) - parseInt(this.rep_9309_3) - parseInt(this.rep_9329_1) - parseInt(this.rep_640000) < 0)
                    return parseInt(this.rep_920000) - parseInt(this.rep_9309_3) - parseInt(this.rep_9329_1) - parseInt(this.rep_640000);
                else
                    return 0;
            }
            ,
            rep_9009_1() {
                return parseInt(this.de_9001_002) + parseInt(this.de_9008) + parseInt(this.cr_9004_002);
            }
            ,

             rep_703001(){

               return (parseInt(this.agri_sum) + parseInt(this.other_sum) + parseInt(this.we_7004)  + parseInt(this.we_7005) +
                   parseInt(this.account_sum) + parseInt(this.loan_sum) + parseInt(this.vehicle_sum) + parseInt(this.we_7009)+
                   parseInt(this.we_7010) + parseInt(this.we_7011) + parseInt(this.we_7013) + parseInt(this.asset_sum) +
                   parseInt(this.outer_asset_sum) + parseInt(this.outer_company_sum)) - this.payable_sum;
             },
        //
        //     rep_property_total() {
        //
        //         this.agri.forEach((value)=>{
        //
        //              console.log('');
        //         });
        //     }
        },
        beforeMount() {
            this.fetchPost();
            // this.fetchPerson();


            // if (((parseInt(this.sa_1000) / parseInt(this.rep_9100_3)) * 100) >= 50) {
            //     this.calculateTaxForSalary(this.rep_9100_3);
            // } else {
            //     this.calculateTaxForNonSalary(this.rep_9100_3);
            // }


        }
        ,
        methods: {

            agriculture: function () {
                if(this.agri) {
                    return JSON.parse(this.agri);
                }
                // console.log(this.agr);
                // return this.agr;
                 //
            },
            other_property: function () {
                // console.log(JSON.parse(this.other));
                if(this.other) {
                    return JSON.parse(this.other);
                }
                // console.log(this.agr);
                // return this.agr;
                //
            },
            account: function(){
// console.log(JSON.parse(this.account_info));
              if(this.account_info){
                  return JSON.parse(this.account_info);
              }

            },
            vehicle: function() {

                if(this.vehicle_info){
                    return JSON.parse(this.vehicle_info);
                }
            },

            loan: function(){

                if(this.loan_info){
                    return JSON.parse(this.loan_info);
                }
            },

            asset: function(){

                if(this.asset_info){

                    return JSON.parse(this.asset_info);
                }
            },

            outerAsset: function(){

              if(this.outer_asset){

                  return JSON.parse(this.outer_asset);
              }
            },

            outerCompany: function(){

              if(this.outer_company_info){

                  return JSON.parse(this.outer_company_info);
              }
            },

            payable: function(){

                if(this.payable_info){

                    return JSON.parse(this.payable_info);
                }
            },

            fetchPost() {
                axios.post('/api/getReport')
                    .then(response => {
                          // console.log(response);
                        this.result = response.data;
                        // console.log(this.result);

                        this.result.forEach((items) => {
                            items.forEach((item) =>
                            {
                                if (item.code === "pr_2001")
                                    this.pr_2001 = item.value || 0;
                                if (item.code === "pr_2031")
                                    this.pr_2031 = item.value || 0;
                                if (item.code === "pr_2032")
                                    this.pr_2032 = item.value || 0;
                                if (item.code === "pr_2033")
                                    this.pr_2033 = item.value || 0;
                                if (item.code === "pr_2098")
                                    this.pr_2098 = item.value || 0;
                                if (item.code === "pr_2000")
                                    this.pr_2000 = item.value || 0;
                                if (item.code === "pr_2029")
                                    this.pr_2029 = item.value || 0;
                                if (item.code === "pr_2002")
                                    this.pr_2002 = item.value || 0;
                                if (item.code === "pr_2099")
                                    this.pr_2099 = item.value || 0;
                                if (item.code === "sa_1000")
                                    this.sa_1000 = item.value || 0;
                                if (item.code === "sa_1009")
                                    this.sa_1009 = item.value || 0;
                                if (item.code === "sa_1049")
                                    this.sa_1049 = item.value || 0;
                                if (item.code === "sa_1059")
                                    this.sa_1059 = item.value || 0;
                                if (item.code === "sa_1089")
                                    this.sa_1089 = item.value || 0;
                                if (item.code === "sa_1089_1")
                                    this.sa_1089_1 = item.value || 0;
                                if (item.code === "sa_1089_1a")
                                    this.sa_1089_1a = item.value || 0;
                                if (item.code === "sa_1089_per")
                                    this.sa_1099 = item.value || 0;
                                if (item.code === "sa_1099")
                                    this.sa_1099 = item.value || 0;
                                if (item.code === "medical")
                                    this.medical = item.value || 0;
                                if (item.code === "provident")
                                    this.provident = item.value || 0;
                                if (item.code === "gratuity")
                                    this.gratuity = item.value || 0;
                                if (item.code === "oth_5003041_1")
                                    this.oth_5003041_1 = item.value || 0;
                                if (item.code === "oth_5028")
                                    this.oth_5028 = item.value || 0;
                                if (item.code === "oth_5028_001")
                                    this.oth_5028_001 = item.value || 0;
                                if (item.code === "oth_5028_002")
                                    this.oth_5028_002 = item.value || 0;
                                if (item.code === "oth_5028_003")
                                    this.oth_5028_003 = item.value || 0;
                                if (item.code === "oth_5028_004")
                                    this.oth_5028_004 = item.value || 0;
                                if (item.code === "oth_5028_005")
                                    this.oth_5028_005 = item.value || 0;
                                if (item.code === "oth_5028_006")
                                    this.oth_5028_006 = item.value || 0;
                                if (item.code === "sa_1000_601")
                                    this.sa_1000_601 = item.value || 0;



                                // console.log(this.account_sum);

                                if (item.code === "we_7006_010")
                                    this.we_7006_010 = item.value || 0;
                                // console.log(this.we_7006_010);
                                if (item.code === "we_7006_007")
                                    this.we_7006_007 = item.value || 0;
                                if (item.code === "we_7006_012")
                                    this.we_7006_012 = item.value || 0;
                                if (item.code === "we_7006_013")
                                    this.we_7006_013 = item.value || 0;
                                if (item.code === "we_7007_007_1")
                                    this.we_7007_007_1 = item.value || 0;
                                if (item.code === "we_7007_007_2")
                                    this.we_7007_007_2 = item.value || 0;
                                if (item.code === "we_7007_007_3")
                                    this.we_7007_007_3 = item.value || 0;
                                if (item.code === "we_7007_007_4")
                                    this.we_7007_007_4 = item.value || 0;
                                if (item.code === "we_7007_011_1")
                                    this.we_7007_011_1 = item.value || 0;
                                if (item.code === "we_7006_014")
                                    this.we_7006_014 = item.value || 0;
                                if (item.code === "we_7006_015")
                                    this.we_7006_015 = item.value || 0;
                                if (item.code === "we_7006_016")
                                    this.we_7006_016 = item.value || 0;
                                if (item.code === "we_703002")
                                    this.we_703002 = item.value || 0;


                                if (item.code === "de_9001_002")
                                    this.de_9001_002 = item.value || 0;
                                if (item.code === "de_9008")
                                    this.de_9008 = item.value || 0;
                                if (item.code === "cr_9004_002")
                                    this.cr_9004_002 = item.value || 0;
                                if (item.code === "cr_9312_003")
                                    this.cr_9312_003 = item.value || 0;
                                if (item.code === "cr_9312")
                                    this.cr_9312 = item.value || 0;
                                if (item.code === "cr_93121_002")
                                    this.cr_93121_002 = item.value || 0;
                                if (item.code === "cr_9313_002")
                                    this.cr_9313_002 = item.value || 0;
                                if (item.code === "oth_6000_004")
                                    this.oth_6000_004 = item.value || 0;
                                if (item.code === "sa_1000_002")
                                    this.sa_1000_002 = item.value || 0;
                                if (item.code === "sa_1000_900")
                                    this.sa_1000_900 = item.value || 0;


                                if (item.code === "adj_64140101_5")
                                    this.adj_64140101_5 = item.value || 0;
                                if (item.code === "adj_64150001_5")
                                    this.adj_64150001_5 = item.value || 0;
                                if (item.code === "adj_64150002_5")
                                    this.adj_64150002_5 = item.value || 0;
                                if (item.code === "adj_64150003_5")
                                    this.adj_64150003_5 = item.value || 0;
                                if (item.code === "adj_64150004_5")
                                    this.adj_64150004_5 = item.value || 0;
                                if (item.code === "adj_64150005_5")
                                    this.adj_64150005_5 = item.value || 0;

                                if (item.code === "pr_64150301")
                                    this.pr_64150301 = item.value || 0;
                                if (item.code === "cr_9312_004")
                                    this.cr_9312_004 = item.value || 0;

                                if (item.code === "pr_64151101")
                                    this.pr_64151101 = item.value || 0;
                                if (item.code === "pr_64150303")
                                    this.pr_64150303 = item.value || 0;
                                if (item.code === "adj_64151201_1")
                                    this.adj_64151201_1 = item.value || 0;

                                if (item.code === "pr_64150302")
                                    this.pr_64150302 = item.value || 0;
                                if (item.code === "sa_1000_007")
                                    this.sa_1000_007 = item.value || 0;
                                if (item.code === "sa_1000_008")
                                    this.sa_1000_008 = item.value || 0;
                                if (item.code === "adj_64150901_1")
                                    this.adj_64150901_1 = item.value || 0;
                                if (item.code === "adj_64150401_1")
                                    this.adj_64150401_1 = item.value || 0;
                                if (item.code === "adj_64150201_1")
                                    this.adj_64150201_1 = item.value || 0;
                                if (item.code === "adj_64150101_1")
                                    this.adj_64150101_1 = item.value || 0;

                                 if (item.code === "we_7004")
                                    this.we_7004 = item.value || 0;
                                if (item.code === "we_7005")
                                    this.we_7005 = item.value || 0;
                                if (item.code === "we_7009")
                                    this.we_7009 = item.value || 0;
                                if (item.code === "we_7010")
                                    this.we_7010 = item.value || 0;
                                if (item.code === "we_7011")
                                    this.we_7011 = item.value || 0;
                                if (item.code === "we_7013")
                                    this.we_7013 = item.value || 0;

                                if(item.code === "agriculture")
                                     this.agri = item.value || 0;

                                if (item.code === "other")
                                    this.other = item.value || 0;

                                if (item.code === "agri_sum")
                                    this.agri_sum = item.value || 0;

                                if (item.code === "other_sum")
                                    this.other_sum = item.value || 0;

                                 if(item.code === "account_info")
                                    this.account_info = item.value;

                                if(item.code === "account_sum")
                                    this.account_sum = item.value || 0;

                                if(item.code === "loan_info")
                                    this.loan_info = item.value || 0 ;

                                if(item.code === "loan_sum")
                                    this.loan_sum = item.value || 0 ;

                                if(item.code === "vehicle_info")
                                    this.vehicle_info = item.value ;

                                if(item.code === "vehicle_sum")
                                    this.vehicle_sum = item.value;

                                if(item.code === "asset_info")
                                    this.asset_info = item.value;

                                if(item.code === "asset_sum")
                                    this.asset_sum = item.value;

                                if(item.code === "outer_asset_info")
                                    this.outer_asset = item.value;

                                if(item.code === "outer_asset_sum")
                                    this.outer_asset_sum = item.value;

                                if(item.code === "outer_company_info")
                                    this.outer_company_info = item.value;

                                if(item.code === "outer_company_sum")
                                    this.outer_company_sum = item.value;

                                if(item.code === "payable_info")
                                    this.payable_info = item.value;

                                if(item.code === "payable_sum")
                                    this.payable_sum = item.value;

                                if(item.code === "we_7051")
                                    this.we_7051 = item.value;

                                if(item.code === "we_7052")
                                    this.we_7052 = item.value;

                                if(item.code === "we_7055")
                                    this.we_7055 = item.value;

                                if(item.code === "we_7056")
                                    this.we_7056 = item.value;

                                if(item.code === "we_7058")
                                    this.we_7058 = item.value;

                                if(item.code === "we_7059")
                                    this.we_7059 = item.value;

                                if(item.code === "we_7060")
                                    this.we_7060 = item.value;

                                if(item.code === "we_7061")
                                    this.we_7061 = item.value;

                                if(item.code === "we_7066")
                                    this.we_7066 = item.value;

                                if(item.code === "we_7070")
                                    this.we_7070 = item.value;

                                if(item.code === "we_7071")
                                    this.we_7071 = item.value;

                                if(item.code === "we_7072")
                                    this.we_7072 = item.value;

                                if(item.code === "we_7073")
                                    this.we_7073 = item.value;

                                if(item.code === "we_7076")
                                    this.we_7076 = item.value;

                                if(item.code === "we_7087")
                                    this.we_7087 = item.value;

                                if(item.code === "we_7088")
                                    this.we_7088 = item.value;


                                if(item.code === "we_7006_009")
                                    this.we_7006_009 = item.value;

                            });

                        });
                    })
            }
            ,
            /*fetchPerson() {
                axios.post('/api/getPersonalInfo')
                    .then(response => {
                        this.result = response.data;
                        this.result.forEach((item) => {
                            console.log(item)
                        })
                    }).catch(function (error) {
                    console.log(error);
                })
            },*/
            calculateTaxForSalary(taxableIncome) {
                let yearlyTax = 0;
                if (taxableIncome <= 400000) {
                    taxableIncome = 0;
                } else if (taxableIncome <= 800000) {
                    yearlyTax = Math.round(1000);
                } else if (taxableIncome <= 1200000) {
                    yearlyTax = Math.round(2000);
                } else if (taxableIncome <= 2500000) {
                    yearlyTax = Math.round((taxableIncome - 1200000) * (5 / 100));
                } else if (taxableIncome <= 4000000) {
                    yearlyTax = Math.round(65000 + (taxableIncome - 2500000) * (15 / 100));
                } else if (taxableIncome <= 8000000) {
                    yearlyTax = Math.round(290000 + (taxableIncome - 4000000) * (20 / 100));
                } else if (taxableIncome > 8000000) {
                    yearlyTax = Math.round(1090000 + (taxableIncome - 8000000) * (25 / 100));
                }
                return yearlyTax;
            }
            ,
            calculateTaxForNonSalary(taxableIncome) {
                let yearlyTax = 0;
                if (taxableIncome <= 400000) {
                    taxableIncome = 0;
                } else if (taxableIncome <= 800000) {
                    yearlyTax = Math.round(1000);

                } else if (taxableIncome <= 1200000) {
                    yearlyTax = Math.round(2000);

                } else if (taxableIncome <= 2400000) {
                    yearlyTax = Math.round(((taxableIncome - 1200000) * (5 / 100)));

                } else if (taxableIncome <= 3000000) {
                    yearlyTax = Math.round(60000 + ((taxableIncome - 2400000) * (15 / 100)));

                } else if (taxableIncome <= 4000000) {
                    yearlyTax = Math.round(150000 + (taxableIncome - 3000000) * (20 / 100));

                } else if (taxableIncome <= 5000000) {
                    yearlyTax = Math.round(350000 + (taxableIncome - 4000000) * (25 / 100));

                } else if (taxableIncome > 5000000) {
                    yearlyTax = Math.round(600000 + (taxableIncome - 5000000) * (29 / 100));
                }
                return yearlyTax;
            }
        }
    }
    ;
</script>

<style scoped>
    .tableFixHead {
        overflow-y: auto;
        height: 700px;
    }

    .tableFixHead thead th {
        position: sticky;
        top: 0;
    }

    /* Just common table stuff. Really. */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px 16px;
    }

    th {
        background: #eee;
    }

    table > tbody > tr > th {
        text-align: center;
        font-size: 25px;
        background: #edb600;
    }
</style>
