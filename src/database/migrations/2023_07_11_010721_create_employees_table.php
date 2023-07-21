    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateEmployeesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('employees', function (Blueprint $table) {
                $table->string('employee_id', 10)->primary();
                $table->string('employee_name', 100);
                $table->string('gender', 10);
                $table->unsignedInteger('department_id');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('employees');
        }
    }
