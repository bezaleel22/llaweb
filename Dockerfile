#############################################
# App Builder: From developrnt to production
#############################################
FROM node:lts-alpine as builder
WORKDIR /app

# BUILD WEBSITE
COPY ./package*.json ./website/
RUN npm install

COPY . .
RUN npm run build
RUN npm prune --production

############################################
# Website: Production image website
############################################
FROM node:lts-alpine as website

WORKDIR /app


COPY --from=builder /app/node_modules ./node_modules/
COPY --from=builder /app/package.json ./package.json
COPY --from=builder /app/build ./build/

ENV NODE_ENV=production
EXPOSE 3000
ENTRYPOINT ["node", "build"]