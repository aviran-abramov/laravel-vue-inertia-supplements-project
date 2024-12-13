export interface IRegisterForm {
    email: string | null;
    first_name: string | null;
    last_name: string | null;
    password: string | null;
    password_confirmation: string | null;
}

export interface ILoginForm {
    email: string | null;
    password: string | null;
}

export interface IFormLabel {
    htmlFor: string;
}

export interface IFormInput {
    type: string;
    name: string;
    id: string;
    placeholder: string;
}

export interface IFormSubmitButton {
    processing: boolean;
}
