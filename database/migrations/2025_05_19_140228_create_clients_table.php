public function up()
{
    Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->timestamps();
    });
}
