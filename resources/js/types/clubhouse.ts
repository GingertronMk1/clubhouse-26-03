import { User } from '@/types/auth';

export type Paginated<T> = {
    current_page: number;
    data: T[];
    from: number;
    first_page_url: string;
    last_page: number;
    last_page_url: string;
    next_page_url: string | null;
    path: string;
    per_page: number;
    prev_page_url: string | null;
    to: number;
    total: number;
    links: {
        url: string|null;
        label: string;
        page: string|null;
        active: boolean;
    };
};


export type Club = {
    id: string;
    name: string;
    description?: string;
    users: User[];
    userIsAdmin: boolean;
    pivot?: {
        type: string;
    }
}
