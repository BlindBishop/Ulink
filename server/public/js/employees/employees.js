angular.module('employees', [
    // We want to include all the submodules to which an employee object will have access.
    // employees module is then routed to the main application
    'employees.create',
    'employees.edit',
    'wombat.models.employees'
])
    .config(function ($stateProvider) {
        $stateProvider
            .state('wombat.nav.employees', {
                //by extending the nav module we are actually making employees a submodule of nav
                //this is how we maintain a persistent navigation bar across many views
                url: 'employees',
                views: {
                    'content@': {
                        controller: 'EmployeesCtrl as employeesCtrl',
                        templateUrl: 'js/employees/employees.tmpl.html'
                    }
                }
            })
        ;
    })
    .controller('EmployeesCtrl', function (EmployeesModel) {
        var employeesCtrl = this;

        EmployeesModel.getEmployees()
            .then(function (employees) {
                employeesCtrl.employees = employees;
            });

        // IDE Hint: to follow a function, hold ctrl and hover your mouse over the function
        employeesCtrl.deleteEmployee = EmployeesModel.deleteEmployee;
            // we can move a function from one class to another by using the above syntax.
            // here we pull functions from the EmployeesModel into the employeesCtrl
    })
;
