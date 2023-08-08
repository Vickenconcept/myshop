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
    },

    countdownData() {
        return {
            remainingTime: 0,
            startCountdown() {
                const endTime = Date.parse("2023-07-16T23:59:59"); // Replace with your desired end time

                setInterval(() => {
                    const currentTime = new Date().getTime();
                    this.remainingTime = endTime - currentTime;
                }, 1000);
            },
            formatTime(time) {
                if (time <= 0) return "0d 0h 0m 0s";

                const days = Math.floor(time / (1000 * 60 * 60 * 24));
                const hours = Math.floor((time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((time % (1000 * 60)) / 1000);

                return `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }
    }

});


