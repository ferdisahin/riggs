import ApplicationController from "./application_controller";

export default class extends ApplicationController {

    /**
     *
     */
    connect() {
        this.addListenerForTargets();
    }

    /**
     *
     */
    addListenerForTargets() {
        this.targets.forEach(name => {
            document.querySelectorAll(`[name="${name}"]`)
                .forEach((field) =>
                    field.addEventListener('change', () => this.render(), {
                        once: true
                    })
                );
        });
    }


    render() {
        let params = new FormData();

        this.targets.forEach(name => document.querySelectorAll(`[name="${name}"]`)
            .forEach((field) => {

                if ((field.type === 'checkbox' || field.type === 'radio') && !field.checked) {
                    return;
                }

                if (field.type === "select-multiple") {
                    params.append(name, Array.from(
                        field.querySelectorAll("option:checked")
                    ).map(e => e.value));
                } else {
                    params.append(name, field.value);
                }
            }));

        this.asyncLoadData(params);
    }

    /**
     *
     * @param params
     */
    asyncLoadData(params) {

        if (!this.data.get('async-route')) {
            return;
        }

         window.axios.post(this.data.get('async-route'), params).then((response) => {
             this.element.querySelector('[data-async]').innerHTML = response.data;
             this.addListenerForTargets();
         });
    }

    /**
     *
     * @returns {any}
     */
    get targets() {
        return JSON.parse(this.data.get('targets'));
    }
}
