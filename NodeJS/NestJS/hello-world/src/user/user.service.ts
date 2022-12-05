import { Injectable } from '@nestjs/common';

@Injectable()
export class UserService {
    async create() {
        return "Create a new user";
    }

    async index()
    {
        return "List all users";
    }

    async get(userId: string)
    {
        return {
            message: `Hello ${userId}`,
        }
    }

    async update(userId: string)
    {
        return "Update a user";
    }

    async delete(userId: string)
    {
        return "Delete a user";
    }
}
