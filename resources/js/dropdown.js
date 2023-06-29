// import { defaults } from "autoprefixer";

export default function() {
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            open: false,

            toggle() {
                this.open = !this.open
            }
        }))
    })
}
