var stringeeClient = new StringeeClient();

stringeeClient.on('connect', function () {
    console.log('++++++++++++++ connected to StringeeServer');
});