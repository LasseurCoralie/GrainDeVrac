import styled from 'styled-components';
import theme from '../../../theme/theme';

const HeaderStyled = styled.header`
  
  display: flex;
  flex-direction: row;
  justify-content: space-between;

  div.logo {
    position: absolute;
    left: 0;
  }

  div.menu {
    position: fixed;
    right: 0;
    nav.openMenu {
      display: none;
    }

    button {
      background-color: white;
      border: 1px solid ${theme.colors.black};
      padding: 2em;
      transition: .5s;

      :hover {
        background-color: ${theme.colors.orange};

        span.squares-menu {
          transform: rotate(90deg);

          div.square {
            border: 4px solid white;
          }
        }
      }

      span.squares-menu {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        height: 39px;
        width: 39px;
        transition: .5s;

        div.square {
          height: 10px;
          width: 10px;
          border: 4px solid ${theme.colors.orange};
          border-radius: 7px;
          transition: all .5s;
          box-sizing: content-box;
        }
      }
    }
  }
`;

export default HeaderStyled;