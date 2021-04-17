export default function NewsletterForm() {
    return (
        <div className="flex justify-center lg:-mx-12 my-8 p-6 md:px-5 bg-gray-200 border text-sm md:rounded">
            <div id="mc_embed_signup">
                <form
                    action="https://laravelphp.us7.list-manage.com/subscribe/post?u=f5c28c2a720916e1b2e30fdd8&amp;id=78f7ed34f4"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" className="validate"
                    target="_blank" noValidate>
                    <div id="mc_embed_signup_scroll">
                        <h2 className="block mb-3 text-2xl text-center">Werde Teil der Laravel Community</h2>
                        <p className="mt-0 text-center">Erhalte Neuigkeiten zu Laravel und Einladungen zu
                            Veranstaltungen.</p>
                        <div style={{position: "absolute", left: "-5000px"}} aria-hidden="true">
                            <input type="text" name="b_f5c28c2a720916e1b2e30fdd8_78f7ed34f4" tabIndex={-1}/>
                        </div>
                        <div className="flex mb-4">
                            <div className="mc-field-group flex-1">
                                <label htmlFor="mce-EMAIL" className="sr-only">E-Mail Adresse</label>
                                <input type="email" name="EMAIL" className="required email" id="mce-EMAIL"
                                       placeholder="E-Mail Adresse"/>
                            </div>
                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" className="button">
                                Anmelden
                            </button>
                        </div>
                        <p className="m-0 text-xs text-center text-gray-600">
                            Maximal eine E-Mail pro Monat.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    );
}
