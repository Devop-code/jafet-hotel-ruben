
@if (! session('contact.sent'))
    <form 
        class="form-contact contact_form"
        action="{{ route('contact.send') }}" 
        method="post" 
        id="contact" 
        novalidate="novalidate"
    >
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input 
                        @class([
                            'form-control',
                            'is-invalid' => $errors->has('name')
                        ])
                        name="name" 
                        type="text" 
                        placeholder="Votre Nom"
                        minlength="3"
                        maxlength="100"
                        value="{{ old('name') }}"
                        required
                    />

                    @error('name')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input 
                        @class([
                            'form-control',
                            'is-invalid' => $errors->has('phone')
                        ])
                        name="phone" 
                        type="text" 
                        placeholder="Votre Numéro"
                        value="{{ old('phone') }}"
                        required
                    >

                    @error('phone')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input 
                        @class([
                            'form-control',
                            'is-invalid' => $errors->has('email')
                        ])
                        name="email" 
                        maxlength="254"
                        type="email" 
                        placeholder="Votre email"
                        value="{{ old('email') }}"
                    >

                    @error('email')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <input 
                        @class([
                            'form-control',
                            'is-invalid' => $errors->has('subject')
                        ])
                        name="subject"
                        type="text" 
                        placeholder="Le sujet..."
                        minlength="3"
                        maxlength="150"
                        required
                        value="{{ old('subject') }}"
                    />

                    @error('subject')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <textarea 
                        @class([
                            'form-control',
                            'resize-none', 
                            'w-100',
                            'is-invalid' => $errors->has('message')
                        ])
                        name="message" 
                        id="message" 
                        cols="30" 
                        rows="9" 
                        placeholder="Votre Message..."
                        minlength="20"
                        maxlength="300"
                    >{{ old('message') }}</textarea>

                    @error('message')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <button 
                type="submit" 
                class="button button-contactForm boxed-btn"
            >
                Envoyer 
            </button>
        </div>
    </form>
@else
    <p class="alert alert-success">
        {{ session('contact.name') ?? 'Hey' }}, notre équipe a bien été contacté. Nous réagirons 
        à votre demande dans les à venir. 
        <br>
        Merci.
    </p>
@endif