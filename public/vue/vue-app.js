var vue_app = new Vue({


    el: '#vue-app',

    data: {

        errors: [], // for viewing of errors

        password_user: 'password',

        employee_list: [], // for philhealth modal

        range_value: '', // for philhealth maintenace module addition
        amount_value: '', // for philhealth maintenace module addition
        rate_value: '', // for philhealth maintenace module addition
        employer_value: '', // for philhealth maintenace module addition
        employee_value: '', // for philhealth maintenace module addition
        ec_value: '', // for sss maintenace module edit
        percentage_value: '', // for sss maintenace module edit
        philhealth_id: '', // for philhealth maintenace module addition
        sss_id: '', // for philhealth maintenace module addition
        withholding_tax_id: '', // for update of witholding tax
        frequency_id: '', // for update of witholding tax
        frequency: {}, // holder of frequency table

        witholding_tax_delete_id: '',


        annual_tax_id: '',
        fixed_rate_value: '', 
        tax_rate_value: '',

        global_delete_id: '',
        global_delete_name: '',


        amount_money: '324',

        leave_array: [],

        holiday_types_array: {},


        shifts_array: {}, // store shifts array here


        bank: {}, // for updating banks

        ot_nightdifferential: {}, // OT
    },


    methods: {

        // toggle password on user
        password_toggle: function () {
            if (this.password_user == 'password'){
                this.password_user = 'text';
            } else{
                this.password_user = 'password';
            }
        },



        full_loader: function() {
           $('#loader-modal').modal({
              backdrop: 'static',
              keyboard: false
           });
        },



        decrypt_encrypt: function (event) {
            var input = $(event.target).closest('div').find('input.password_holder');
            var type = $(input).attr('type');
            if (type == 'text'){
                $(input).attr('type','password');
            } else{
                $(input).attr('type','text');
            }
        },


        philhealth_get_all_employees: function ($element)
        {
            var root_element = this; // the parent element
            request = $.ajax({
                url: baseUrl+'/get_all_employees',
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.employee_list = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#'+$element+' .loaderRefresh').fadeOut('fast');
            });
        },


        philhealth_maintenance: function () {
            $('#add_philheatlh_modal').find('.loaderRefresh').fadeIn(0);
            $('#add_philheatlh_modal').modal();
            this.philhealth_get_all_employees('add_philheatlh_modal');
        },



        philhealth_maintenance_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#add_philheatlh_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/philhealth',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Philhealth Maintenance Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#add_philheatlh_modal .loaderRefresh').fadeOut('fast');
            });
        },


        philhealth_maintenance_edit: function (event, $id)
        {
            var root_element = this; // the parent element
            $('#edit_philheatlh_modal').find('.loaderRefresh').fadeIn(0);
            $('#edit_philheatlh_modal').modal();
            request = $.ajax({
                url: baseUrl+'/philhealth/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.philhealth_id = response.id;
                root_element.range_value = response.ranges;
                root_element.amount_value = response.amount;
                root_element.rate_value = response.rate;
                root_element.employer_value = response.employer;
                root_element.employee_value = response.employee_id;

                root_element.philhealth_get_all_employees('edit_philheatlh_modal');
                root_element.check_employee_id();
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                // $('#edit_philheatlh_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        check_employee_id: function($employee_id)
        {
            return ($employee_id == this.employee_value)? true : false;
        },


        philhealth_maintenance_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#edit_philheatlh_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/philhealth/'+root_element.philhealth_id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Philhealth Maintenance Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#edit_philheatlh_modal .loaderRefresh').fadeOut('fast');
            });
        },


        philhealth_maintenance_delete: function ($id)
        {
            var ans = confirm('Do you really want to delete this data?');
            if (ans) {
                this.full_loader(); // show window loader
                var root_element = this; // the parent element
                request = $.ajax({
                    url: baseUrl+'/philhealth_delete/'+$id,
                    type: "get",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                });
                request.done(function (response, textStatus, jqXHR) {
                    console.log(response);
                    toaster('info', 'Philhealth Maintenance Has Been Deleted.');
                    location.reload();
                });
                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
                });
                request.always(function(){
                    // $('#edit_philheatlh_modal .loaderRefresh').fadeOut('fast');
                });
            }
            
        },



        // SSS MODULE
        sss_add: function() {
            $('#sss_add_modal').find('.loaderRefresh').fadeIn(0);
            $('#sss_add_modal').modal();
            this.philhealth_get_all_employees('sss_add_modal');
        },


        sss_submit_form: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#sss_add_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/sss',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'SSS Maintenance Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#sss_add_modal .loaderRefresh').fadeOut('fast');
            });
        },



        sss_maintenance_edit: function (event, $id)
        {
            var root_element = this; // the parent element
            $('#sss_edit_modal').find('.loaderRefresh').fadeIn(0);
            $('#sss_edit_modal').modal();
            request = $.ajax({
                url: baseUrl+'/sss/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.sss_id = response.id;
                root_element.range_value = response.ranges;
                root_element.employer_value = response.employer;
                root_element.employee_value = response.employee_id;
                root_element.ec_value = response.ec;

                root_element.philhealth_get_all_employees('sss_edit_modal');
                // root_element.check_employee_id();
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#sss_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        sss_edit_submit_form: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#sss_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/sss/'+root_element.sss_id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'SSS Maintenance Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#sss_edit_modal .loaderRefresh').fadeOut('fast');
            });
        },


        sss_maintenance_delete: function ($id)
        {
            var ans = confirm('Do you really want to delete this data?');
            if (ans) {
                this.full_loader(); // show window loader
                var root_element = this; // the parent element
                request = $.ajax({
                    url: baseUrl+'/sss_delete/'+$id,
                    type: "get",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                });
                request.done(function (response, textStatus, jqXHR) {
                    console.log(response);
                    toaster('info', 'SSS Maintenance Has Been Deleted.');
                    location.reload();
                });
                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
                });
                request.always(function(){
                    // $('#edit_philheatlh_modal .loaderRefresh').fadeOut('fast');
                });
            }
            
        },



        get_frequency: function () {
            var root_element = this; // the parent element
            request = $.ajax({
                url: baseUrl+'/get_frequency',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                root_element.frequency = response;
            });
        },


      


        withholding_tax_new: function() {
            var root_element = this; // the parent element
            $('#withholding_tax_modal').find('.loaderRefresh').fadeIn(0);
            $('#withholding_tax_modal').modal();
            request = $.ajax({
                url: baseUrl+'/get_frequency',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                root_element.frequency = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#withholding_tax_modal .loaderRefresh').fadeOut('fast');
            });
        },




        witholding_tax_submit: function(event){
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#withholding_tax_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/withholding_tax',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Withholding Tax Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#withholding_tax_modal .loaderRefresh').fadeOut('fast');
            });
        },



        witholding_tax_edit: function (event, $id) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            this.get_frequency();
            $('#withholding_tax_edit').find('.loaderRefresh').fadeIn(0);
            $('#withholding_tax_edit').modal();
            request = $.ajax({
                url: baseUrl+'/withholding_tax/'+$id+'/edit',
                type: "get",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.withholding_tax_id = response.id;
                root_element.frequency_id = response.frequency_id;
                root_element.range_value = response.ranges;
                root_element.percentage_value = response.percentage;
                root_element.amount_value = response.amount;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#withholding_tax_edit .loaderRefresh').fadeOut('fast');
            });
        },


        check_frequency_id: function($frequency_id)
        {
            return ($frequency_id == this.frequency_id)? true : false;
        },



        witholding_tax_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#withholding_tax_edit').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/withholding_tax/'+root_element.withholding_tax_id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Withholding Tax Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#withholding_tax_edit').find('.loaderRefresh').fadeOut('fast');
            });
        },



        witholding_tax_delete_modal: function ($id) {
            this.witholding_tax_delete_id = $id;
            $('#withholding_tax_delete').modal();
        },


        witholding_tax_delete: function ()
        {
                var root_element = this; // the parent element
                $('#withholding_tax_delete').find('.loaderRefresh').fadeIn(0);
                request = $.ajax({
                    url: baseUrl+'/withholding_tax_delete/'+root_element.witholding_tax_delete_id,
                    type: "get",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                });
                request.done(function (response, textStatus, jqXHR) {
                    console.log(response);
                    toaster('info', response.info);
                    location.reload();
                });
                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
                });
                request.always(function(){
                    $('#withholding_tax_delete').find('.loaderRefresh').fadeOut('fast');
                });
            
        },



        // annual tax
        annual_tax_new: function () {
            $('#annualtax_new').modal();
        },
        

        annualtax_new_submit: function(event){
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#annualtax_new').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/annual_tax',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Annual Tax Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#annualtax_new').find('.loaderRefresh').fadeOut('fast');
            });
        },
        

        annual_tax_edit: function ($id) {
            var root_element = this; // the parent element
            $('#annualtax_edit').find('.loaderRefresh').fadeIn(0);
            $('#annualtax_edit').modal();
            request = $.ajax({
                url: baseUrl+'/annual_tax/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.annual_tax_id = response.id;
                root_element.range_value = response.ranges;
                root_element.fixed_rate_value = response.fixed_rate;
                root_element.tax_rate_value = response.tax_rate;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#annualtax_edit .loaderRefresh').fadeOut('fast');
            });
        },
        


        annualtax_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#annualtax_edit').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/annual_tax/'+root_element.annual_tax_id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Annual Tax Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#annualtax_edit').find('.loaderRefresh').fadeOut('fast');
            });
        },


        global_delete: function($id, $name) {
            this.global_delete_id = $id;
            this.global_delete_name = $name;
            $('#delete_modal').modal();
        },


        delete_yes: function () {
            var delName = this.global_delete_name;
            if (delName == 'annual_tax_delete') {
                this.annual_tax_delete();
            }else if (delName == 'leave_delete') {
                this.leave_delete();
            }else if (delName == 'bank_delete') {
                this.bank_delete();
            }
        },


        annual_tax_delete: function (){
            var root_element = this; // the parent element
            $('#delete_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/annual_tax_delete/'+root_element.global_delete_id,
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                toaster('info', 'Annual Tax Has Been Deleted.');
                location.reload();
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
            });
        },




        /* leave tables */

        leave_new_open: function () {
            $('#leave_new_modal').modal();

        },

        leave_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#leave_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/leave',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Leave Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#leave_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        leave_edit: function ($id) {
            var root_element = this; // the parent element
            $('#leave_edit_modal').find('.loaderRefresh').fadeIn(0);
            $('#leave_edit_modal').modal();
            request = $.ajax({
                url: baseUrl+'/leave/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.leave_array = response;
                console.log(root_element.leave_array);
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#leave_edit_modal .loaderRefresh').fadeOut('fast');
            });
        },


        cash_convertible_check: function (status) {
            return (status == 'Y')? true : false;
        },

        carry_over_check: function (status) {
            return (status == 'Y')? true : false;
        },


        leave_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#leave_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/leave/'+root_element.leave_array.id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Leave Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#leave_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        leave_delete: function (){
            var root_element = this; // the parent element
            $('#delete_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/leave_delete/'+root_element.global_delete_id,
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                toaster('info', 'Leave Has Been Deleted.');
                location.reload();
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
        },



        /* holiday */

        holiday_new: function () {
            var root_element = this; // the parent element
            $('#holiday_new_modal').modal();
            $('#holiday_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/holiday_types',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                root_element.holiday_types_array = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#holiday_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        holiday_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#holiday_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/holiday',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Leave Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#holiday_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        rest_day_new: function () {
            var root_element = this; // the parent element
            $('#rest_day_new_modal').modal();
            $('#rest_day_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/shifts',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                root_element.shifts_array = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#rest_day_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        rest_day_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#rest_day_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/rest_day',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Leave Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#rest_day_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },







        // for editing of banks
        banks_edit: function ($id) {
            var root_element = this; // the parent element
            $('#banks_edit_modal').modal();
            var data = $(event.target).serialize();
            $('#banks_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/banks/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.bank = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#banks_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },




        bank_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#banks_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/banks/'+root_element.bank.id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Leave Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#banks_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        bank_delete: function (){
            var root_element = this; // the parent element
            $('#delete_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/bank_delete/'+root_element.global_delete_id,
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                toaster('info', 'Bank Has Been Deleted.');
                location.reload();
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
        },



        departments_new_open_modal: function () {
            $('#department_modal').modal();
        },



        department_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#department_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/departments',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Department Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#department_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        position_new_open_modal: function () {
            $('#position_modal').modal();
        },



        position_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#position_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/positions',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Position Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#position_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        cost_center_new_open_modal: function () {
            $('#cost_center_modal').modal();
        },



        cost_center_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#cost_center_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/cost_center',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Cost Center Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#cost_center_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        open_employee_status_new_modal: function () {
            $('#employee_status_new_modal').modal();
        },


        employee_status_new_submit: function () {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#employee_status_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/employee_status',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Cost Center Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#employee_status_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        open_night_differential_modal: function () {
            $('#overtime_nightdifferential_new_modal').modal();
        },




        overtime_nightdifferential_new_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#overtime_nightdifferential_new_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/overtime_nightdifferential',
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Overtime Night Differential Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#overtime_nightdifferential_new_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



        overtime_nightdifferential_edit: function ($id) {
            var root_element = this; // the parent element
            $('#overtime_nightdifferential_edit_modal').modal();
            var data = $(event.target).serialize();
            $('#overtime_nightdifferential_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/overtime_nightdifferential/'+$id+'/edit',
                type: "get",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                root_element.ot_nightdifferential = response;
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#overtime_nightdifferential_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },


        overtime_nightdifferential_edit_submit: function (event) {
            var root_element = this; // the parent element
            var data = $(event.target).serialize();
            $('#overtime_nightdifferential_edit_modal').find('.loaderRefresh').fadeIn(0);
            request = $.ajax({
                url: baseUrl+'/overtime_nightdifferential/'+root_element.ot_nightdifferential.id,
                type: "post",
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json'
            });
            request.done(function (response, textStatus, jqXHR) {
                console.log(response);
                if ($.isEmptyObject(response.errors)) {
                    toaster('success', response.success);
                    location.reload();
                }else{
                    toaster('error', 'Overtime Night Differential Not Saved.');
                    root_element.errors = response.errors;
                }
            });
            request.fail(function (jqXHR, textStatus, errorThrown){
                console.log("The following error occured: "+ jqXHR, textStatus, errorThrown);
            });
            request.always(function(){
                $('#overtime_nightdifferential_edit_modal').find('.loaderRefresh').fadeOut('fast');
            });
        },



    }, // end of method



    computed: {
    


    },


    filters: {
        textuppercase: function (value){
            if (!value) return '';
            return value.toString().toUpperCase();
        },
        formatMoney: function (n, c, d, t) {
            var c = isNaN(c = Math.abs(c)) ? 2 : c,
                d = d == undefined ? "." : d,
                t = t == undefined ? "," : t,
                s = n < 0 ? "-" : "",
                i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
                j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        },
    }




})