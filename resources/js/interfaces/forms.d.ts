export interface IRegisterForm {
    email: string | null;
    first_name: string | null;
    last_name: string | null;
    password: string | null;
    password_confirmation: string | null;
}

export interface IFormLabel {
    htmlFor: string;
}
