<?php $__env->startSection('content'); ?>

<style type="text/css">
        table {
            width: 100%;
            border: 1px black;
        }

            table td, table th {
                border: 1px solid black;
            }

            table .FirstColumn {
                background-color: white;
            }

            table thead tr {
                background-color: lightgreen;
            }

            table tbody.secondHeader tr {
                background-color: skyblue;
            }

            table tfoot{

                background-color: white;
            }
    </style>

<style>
        body {
                font-family: 'Nunito', sans-serif;
            }

        

        </style>

        <div class="bg-success p-2 text-white bg-opacity-10">
        <div class="text-center pb-2 m-2">
        <h2> Department of Industrial Policy and Promotion </h2>
        </div>
        </div>

         <hr size="1" noshade>
         
         <div class="text-center pb-2 m-2">
        <h4> Foreign Collaboration Query Module</h4>
        </div>
       
        
        <div class="text-center pb-2 m-2">
        <h4> Report </h4>
        </div>
        <hr size="1" noshade>

<div class="container">
    <div class="row">

        <?php if($fromTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($fromTitle); ?></h4>
        </div>
        <?php endif; ?>

        <?php if($toTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($toTitle); ?></h4>
        </div>
        <?php endif; ?>

        <?php if($AgencyTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($AgencyTitle); ?></h4>
        </div>
        <?php endif; ?>


        <?php if($CountryTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($CountryTitle); ?></h4>
        </div>
        <?php endif; ?>

        <?php if($ScheduleIndustryTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($ScheduleIndustryTitle); ?></h4>
        </div>
        <?php endif; ?>

        <?php if($StateTitle): ?>
        <div class="col-md-4">
        <h4> <?php echo e($StateTitle); ?></h4>
        </div>
        <?php endif; ?>

</div>


<br>
<br>

      

<?php if($reportOn == 'Country' && $reportType == 'Summary' ): ?>

<table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the Country</th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
        <tr> 

        </tbody>
        <tfoot>
    <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
    </tr>
  </tfoot>
    </table>
<?php elseif($reportOn == 'Schedule Industry' && $reportType == 'Summary' ): ?>


<br>
<br>
<table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the Schedule Industry</th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
        <tr> 
        </tbody>
        <tfoot>
    <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
    </tr>
  </tfoot>
    </table>

    <?php elseif($reportOn == 'State' && $reportType == 'Summary' ): ?>
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the State </th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
       
        </tbody>
        <tfoot>
        <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
        </tr>
        </tfoot>

    </table>
    <?php elseif($reportOn == 'Country' && $reportType == 'Detailed' ): ?>

    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    <?php elseif($reportOn == 'Country' && $reportType == 'Detailed' ): ?>
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    <?php elseif($reportOn == 'Schedule Industry' && $reportType == 'Detailed' ): ?>  
    
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    <?php elseif($reportOn == 'State' && $reportType == 'Detailed' ): ?>  
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>

    </table>

    <?php elseif($reportOn == 'Country' && $reportType == 'Year Wise' ): ?>  

    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Country</th>
                <th colspan="1">Total</th>
                
            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    <?php elseif($reportOn == 'Schedule Industry' && $reportType == 'Year Wise' ): ?>  

<table cellpadding="15" cellspacing="10">
    <colgroup>
        <col class="FirstColumn">
    </colgroup>
    <thead >
        <tr>
            <th colspan="1">S.No</th>
            <th colspan="1">Country</th>
            <th colspan="3">Total</th>

        </tr>
    </thead>
    <tbody>
    
    <tr></tr>
    <tr> 


     
    </tbody>
</table>

<?php elseif($reportOn == 'State' && $reportType == 'Year Wise' ): ?>  

<table cellpadding="15" cellspacing="10">
    <colgroup>
        <col class="FirstColumn">
    </colgroup>
    <thead >
        <tr>
            <th colspan="1">S.No</th>
            <th colspan="1">Country</th>
            <th colspan="3">Total</th>
        </tr>
    </thead>
    <tbody>
    
    <tr></tr>
    <tr> 


     
    </tbody>
</table>



<?php endif; ?>
<!--year wise-->








      


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nikita laravel/laravel/resources/views/report-main.blade.php ENDPATH**/ ?>