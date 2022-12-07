import { Controller, Get, Query, Param, Req, Post, Delete } from '@nestjs/common';
import { Request } from 'express';
import { UserRequest } from 'src/request/user.request';
import { UserService } from './user.service';

@Controller('user')
export class UserController {
    constructor (
        private readonly userService: UserService,
    ) {}

    // Create user
    @Get('/create')
    async createUser(@Req() request: Request) {
      return await this.userService.create();
    }
    
    // Read specific :id
    @Get()
    async showUser(@Query() request: UserRequest) {
      return `api get
      id=${request.id}
      username=${request.name}
      email=${request.email}`;
    }

    // Find All
    @Post('/store')
    findAll(@Req() request: Request) {
      console.log(request.body.name);
    }

    Update
    @Get(':userId')
    async updateUser(@Query() userId: string) {
      return await this.userService.update(userId);
    }

    // Delete
    @Get(':userId')
    async deleteUser(@Query() userId: string) {
      return await this.userService.delete(userId);
    }
    
}
