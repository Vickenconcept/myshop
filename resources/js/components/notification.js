export default () => ({
    sayHi() {
        console.log("hello");
    },

    notify(message) {
        Toastify({
            text: message,
            duration: 3000,
            gravity: 'top',
        }).showToast();
    }

});

// Toastify({
//     text: "hello world",
//     duration: 3000,
//     gravity: 'top',
// }).showToast();

