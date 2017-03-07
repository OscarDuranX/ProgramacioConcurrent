function b(cb) {
    console.log('foo');
    cb();
}

b(function () {
    console.log("a");
})

