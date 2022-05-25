Creating a Department
curl --location --request POST 'http://laravel-api.local/api/add-department' \
--header 'Accept: application/json' \
--header 'Content-Transfer-Encoding: application/json' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImF2cGVxZ2RsalJ1QjM4NXlrY0lVNHc9PSIsInZhbHVlIjoiSnRRTUZORW45ZmZUbUFLVFFRd2N6ZUhKdjE0NksrSVhnczhyM3NOVis4ZGltb2J4dDN0TkJxeVJ5bkRsYnc3UHRqbHBSa3c5K1dERkF6MVBqZEg5UEFtSzluU3NLWjl1N0FDOWRrZmxBdWdwbU54VnUvckRTVk9FQUpQNlgrZXkiLCJtYWMiOiJhMmYwZDc5NDE3MWQ3ZmY2M2ZhZjQzZmY2YTEwZmVlM2IyYmNhYmEwOTdkNDBlNDc2M2FmNWE4ZWFiZDJmODYzIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InNPTkYvOC9NQ1dJTG8zVEhuRkgzTUE9PSIsInZhbHVlIjoib0czdVVXaWtXOUJlcWU5WStoSTBDQytlZ2oxU2hHcGZTMWdxaUJQMlNjR3VFb1dCRU9zcE90aWRvRW00a2cvVGg3Kzd6RzFjL2YvNjVQcCs1aU8ySEI5Q21TczcxOUVMeW04bWs3WTgyKzI1aHA4WSttNTdZSmhjK0NJWTdNOUgiLCJtYWMiOiJlZjRkZmQwMjdhNTg1YTJjYTg4MzZiYzNhMTgyMDAzYjk2YzVjYTExOTJlNTkxMjk4NTc0OGQyNmM4NGFlZDM1IiwidGFnIjoiIn0%3D' \
--data-raw '{"name":"IT", "description": "Department for IT related services"}'

Response: {"status":true,"message":"Department created successfully"}



Adding an Employee
curl --location --request POST 'http://laravel-api.local/api/add-employee' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImF2cGVxZ2RsalJ1QjM4NXlrY0lVNHc9PSIsInZhbHVlIjoiSnRRTUZORW45ZmZUbUFLVFFRd2N6ZUhKdjE0NksrSVhnczhyM3NOVis4ZGltb2J4dDN0TkJxeVJ5bkRsYnc3UHRqbHBSa3c5K1dERkF6MVBqZEg5UEFtSzluU3NLWjl1N0FDOWRrZmxBdWdwbU54VnUvckRTVk9FQUpQNlgrZXkiLCJtYWMiOiJhMmYwZDc5NDE3MWQ3ZmY2M2ZhZjQzZmY2YTEwZmVlM2IyYmNhYmEwOTdkNDBlNDc2M2FmNWE4ZWFiZDJmODYzIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InNPTkYvOC9NQ1dJTG8zVEhuRkgzTUE9PSIsInZhbHVlIjoib0czdVVXaWtXOUJlcWU5WStoSTBDQytlZ2oxU2hHcGZTMWdxaUJQMlNjR3VFb1dCRU9zcE90aWRvRW00a2cvVGg3Kzd6RzFjL2YvNjVQcCs1aU8ySEI5Q21TczcxOUVMeW04bWs3WTgyKzI1aHA4WSttNTdZSmhjK0NJWTdNOUgiLCJtYWMiOiJlZjRkZmQwMjdhNTg1YTJjYTg4MzZiYzNhMTgyMDAzYjk2YzVjYTExOTJlNTkxMjk4NTc0OGQyNmM4NGFlZDM1IiwidGFnIjoiIn0%3D' \
--data-raw '{"name": "Mohit Kumar", "email":"mohitkumar946@gmail.com", "phone_no":["7007284327", "8604480348"],"address":["96-A Bhawani Nagar", "472-B Shivpuram"], "age":"27", "gender":"male", "department_id":"1"}'

Response: {"status":true,"message":"Employee created successfully"}



Get the List of All Departments
curl --location --request GET 'http://laravel-api.local/api/list-departments'

Response: {"status":true,"message":"Listing departments","data":[{"id":1,"name":"HR1","description":"Department for HR related services","created_at":"2022-05-24T19:15:13.000000Z","updated_at":"2022-05-24T19:19:18.000000Z"},{"id":2,"name":"IT","description":"Department for IT related services","created_at":"2022-05-24T19:15:59.000000Z","updated_at":"2022-05-24T19:15:59.000000Z"}]}



Get Details of a Single Department
curl --location --request GET 'http://laravel-api.local/api/department/1'

Response: {"status":true,"message":"Department Found","data":{"id":1,"name":"HR1","description":"Department for HR related services","created_at":"2022-05-24T19:15:13.000000Z","updated_at":"2022-05-24T19:19:18.000000Z"}}


Get List of All employees
curl --location --request GET 'http://laravel-api.local/api/list-employees'

Response: {"status":true,"message":"Listing Employees","data":[{"id":1,"name":"Deepak Singh Parihar","email":"deepakparihar946@gmail.com","phone_no":"[\"7007284327\",\"8604480348\"]","address":"[\"96-A Bhawani Nagar\",\"472-B Shivpuram\"]","gender":"male","age":27,"department_id":2,"created_at":"2022-05-24T19:16:51.000000Z","updated_at":"2022-05-24T19:21:37.000000Z"},{"id":2,"name":"Mohit Kumar","email":"mohitkumar946@gmail.com","phone_no":"[\"7007284327\",\"8604480348\"]","address":"[\"96-A Bhawani Nagar\",\"472-B Shivpuram\"]","gender":"male","age":27,"department_id":1,"created_at":"2022-05-24T19:29:30.000000Z","updated_at":"2022-05-24T19:29:30.000000Z"}]}


Get Details of Single Employee
curl --location --request GET 'http://laravel-api.local/api/employee/2'

Response: {"status":true,"message":"Employee Found","data":{"id":2,"name":"Mohit Kumar","email":"mohitkumar946@gmail.com","phone_no":"[\"7007284327\",\"8604480348\"]","address":"[\"96-A Bhawani Nagar\",\"472-B Shivpuram\"]","gender":"male","age":27,"department_id":1,"created_at":"2022-05-24T19:29:30.000000Z","updated_at":"2022-05-24T19:29:30.000000Z"}}



Updating a Department
curl --location --request PUT 'http://laravel-api.local/api/update-department/1' \
--header 'Content-Type: application/json' \
--data-raw '{"name" : "HR1"}'

Response: {"status":true,"message":"Department Updated succsessfully"}


Updating details of an Employee
curl --location --request PUT 'http://laravel-api.local/api/update-employee/1' \
--header 'Content-Type: application/json' \
--data-raw '{"name" : "Deepak Singh Parihar"}'

Response: {"status":true,"message":"Successfully updated the employee details"}


Deleting a Department
curl --location --request DELETE 'http://laravel-api.local/api/delete-department/1' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6InJsREpJNTAyVGFMRjNQbXU2Vy9DdWc9PSIsInZhbHVlIjoia1UyZS82aTUvUFVBUUd0dzJJQlU3c05DQ2hndjhtTWh6ai9sVExJQUgzMm5OcXAzWmZXdTVoazdtNkQ3Nm9jT0lWWkNtSmFjK2hUYWxOUm9vU1RwUHRhVDZYNHQ0a0lIaFhSK3hoQ0dDY3hWOW0zWGcvWEFlYjE1aHlrNFlOR2wiLCJtYWMiOiI2Y2VhODMyN2VhZGFmM2NmMDZhZjUxMjRlYjk1NGE4ZGJlYTc2YzIwZjFmNjY2NDc4YmRjMTZiMTI5N2U1YWY2IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InFvUlN4UXJtcXRnWmhZNDBDbUhUblE9PSIsInZhbHVlIjoiMWJGd0lBblBsTWZPU2Z1ZUFmcExwQkpoMzdmbUNOSCt6cUUyanlJaDNLb2R1NnJRZTJDbkxSckxxL1U2bk5QUkkvdERJamtwQmdUUGVQMkIrN0xPbEFyZzI3MUx1VUx1R1NuQkQ1NFozUk1uWjRYZ1JESXVpNjcvbWh0eEw3LzIiLCJtYWMiOiI1MDk0NDIzYjIyYzUzN2IyMTQ4MDM3MDM1YmEyZWEzOTE2ODVjM2VjMzg1ZTg3Y2NlYWRhOWU3ZDBmYjNkNDIwIiwidGFnIjoiIn0%3D'

Response: {"status":true,"message":"Department deleted succsessfully"}


Deleting an Employee
curl --location --request DELETE 'http://laravel-api.local/api/delete-employee/2' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6InJsREpJNTAyVGFMRjNQbXU2Vy9DdWc9PSIsInZhbHVlIjoia1UyZS82aTUvUFVBUUd0dzJJQlU3c05DQ2hndjhtTWh6ai9sVExJQUgzMm5OcXAzWmZXdTVoazdtNkQ3Nm9jT0lWWkNtSmFjK2hUYWxOUm9vU1RwUHRhVDZYNHQ0a0lIaFhSK3hoQ0dDY3hWOW0zWGcvWEFlYjE1aHlrNFlOR2wiLCJtYWMiOiI2Y2VhODMyN2VhZGFmM2NmMDZhZjUxMjRlYjk1NGE4ZGJlYTc2YzIwZjFmNjY2NDc4YmRjMTZiMTI5N2U1YWY2IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InFvUlN4UXJtcXRnWmhZNDBDbUhUblE9PSIsInZhbHVlIjoiMWJGd0lBblBsTWZPU2Z1ZUFmcExwQkpoMzdmbUNOSCt6cUUyanlJaDNLb2R1NnJRZTJDbkxSckxxL1U2bk5QUkkvdERJamtwQmdUUGVQMkIrN0xPbEFyZzI3MUx1VUx1R1NuQkQ1NFozUk1uWjRYZ1JESXVpNjcvbWh0eEw3LzIiLCJtYWMiOiI1MDk0NDIzYjIyYzUzN2IyMTQ4MDM3MDM1YmEyZWEzOTE2ODVjM2VjMzg1ZTg3Y2NlYWRhOWU3ZDBmYjNkNDIwIiwidGFnIjoiIn0%3D'

Response: {"status":true,"message":"Department deleted succsessfully"}


Search The Details of an Employee
curl --location --request GET 'http://laravel-api.local/api/employee/q/mohit'

Response: {"status":true,"message":"Search results are","data":[{"id":2,"name":"Mohit Kumar","email":"mohitkumar946@gmail.com","phone_no":"[\"7007284327\",\"8604480348\"]","address":"[\"96-A Bhawani Nagar\",\"472-B Shivpuram\"]","gender":"male","age":27,"department_id":1,"created_at":"2022-05-24T19:29:30.000000Z","updated_at":"2022-05-24T19:29:30.000000Z"}]}


 Search For A Department
curl --location --request GET 'http://laravel-api.local/api/department/q/IT'

Response: {"status":true,"message":"Search results are","data":[{"id":2,"name":"IT","description":"Department for IT related services","created_at":"2022-05-24T19:15:59.000000Z","updated_at":"2022-05-24T19:15:59.000000Z"}]}

