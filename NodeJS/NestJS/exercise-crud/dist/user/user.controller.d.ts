import { CreateUserDto } from 'src/dto/users.dtos';
import { UserService } from './user.service';
export declare class UserController {
    private readonly userService;
    constructor(userService: UserService);
    getUsers(): Promise<import("..").User[]>;
    findUsersById(id: number): Promise<import("..").User>;
    createUsers(createUserDto: CreateUserDto): Promise<import("..").User>;
    updateUser(userId: number, request: CreateUserDto): Promise<void>;
}
